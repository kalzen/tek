<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Arr;
use App\Models\Product;
use App\Models\Catalogue;
use App\Models\Image;
use DB;
use GuzzleHttp\Client;
class ProductController extends Controller
{
    public function index()
    {
        $catalogues = Catalogue::orderBy('id','asc')->get();
        $products = Product::active()->latest()->paginate();
        return view('product.index',compact('catalogues','products'));
    }
    public function catalogue($alias)
    {
        $catalogues = Catalogue::orderBy('id','asc')->get();
        $catalogue = Catalogue::where('slug',$alias)->firstOrFail();
        //keyword
        $query = $catalogue->products()->active();
        if (request('sort')=='price-asc') {
            $query->orderBy('price','asc');
        } else if (request('sort') == 'price-desc') {
            $query->orderBy('price','desc');
        } else {
            $query->orderBy('created_at','desc');
        }
        if (request('keyword')) {
            $query->where(function($p){
                $p->where('title','like','%'.request('keyword').'%')
                ->orWhere('description','like','%'.request('keyword').'%')
                ->orWhere('slug','like','%'.request('keyword').'%')
                ->orWhereHas('tags',function($tag){
                    $tag->where('name','like','%'.request('keyword').'%');
                })
                ->orWhereHas('catalogues',function($tag){
                    $tag->where('name','like','%'.request('keyword').'%')
                    ->orWhere('slug','like','%'.request('keyword').'%');
                });
            });
        }
        $products = $query->paginate();
        return view('product.index',compact('catalogue','products','catalogues'));
    }
    public function crawl()
    {
        $client = new Client();
$response = $client->get('https://searchapi.samsung.com/v6/front/b2c/product/finder/global?type=01010000&siteCode=vn&start=6&num=51&sort=recommended&onlyFilterInfoYN=N&keySummaryYN=Y&specHighlightYN=Y&familyId=');

$json = json_decode($response->getBody(), true);

foreach ($json['response']['resultData']['productList'] as $product)
{
    $data = array();
    $data['price'] = $product['modelList'][0]['price'];
    $images =  $product['modelList'][0]['thumbUrl'];
    $data['title'] =  $product['modelList'][0]['displayName'];
    $data['code'] =  $product['modelList'][0]['modelCode'];
    $data['benefits_text'] = json_encode($product['localBenefitList']);
    $data['options_lists'] = json_encode($product['chipOptions']);
    // foreach ($product['chipOptions'] as $att)
    // {
    //     if($att['fmyChipType'] == 'COLOR')
    //     {
    //         $attributes['1']['value'] = $att['fmyChipType']['optionList'];
    //     }
    //     elseif($att['fmyChipType'] == 'MOBILE MEMORY')
    //     {
    //         $attributes['2']['value'] = $att['fmyChipType']['optionList'];
    //     }
    //     elseif($att['fmyChipType'] == 'OTHER')
    //     {
    //         $attributes['3']['value'] = $att['fmyChipType']['optionList'];
    //     }
    // }
    // $attributes['4']['value'] = $product['localBenefitList'];
    $category_id = 1;
    DB::beginTransaction();
        try {
            $product = Product::create($data);
           // $product->attributes()->sync(collect($attributes)->filter(function($item){return $item['value'];}));
            $product->catalogues()->sync($category_id);
            $product->images()->sync(collect(explode(',',$images))->map(function($item){return Image::updateOrCreate(['url'=>$item]);})->pluck('id'));
            DB::commit();
           
        } catch(Exception $ex) {
            DB::rollback();
            
        }
}

    }

    public function search()
    {
        $catalogues = Catalogue::orderBy('id','asc')->get();
        $query = Product::with(['catalogues','images'])->active();
        
        if (request('sort')=='price-asc') {
            $query->orderBy('price','asc');
        } else if (request('sort') == 'price-desc') {
            $query->orderBy('price','desc');
        } else {
            $query->orderBy('created_at','desc');
        }
        $products = $query->where(function($p){
            $p->where('title','like','%'.request('keyword').'%')
            ->orWhereHas('catalogues',function($q){
                $q->where('name','like','%'.request('keyword').'%');
            });
        })->paginate();
        return view('product.index',compact('products','catalogues'));
    }
    public function detail($alias)
    {
        $product = Product::active()->where('slug',$alias)->firstOrFail();
        DB::table('products')->where('id',$product->id)->increment('viewed');
        return view('product.detail',compact('product'));
    }
}
