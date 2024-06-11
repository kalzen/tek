<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Arr;
use App\Models\Product;
use App\Models\Catalogue;
use App\Models\Image;
use App\Models\Package;
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
        $categories = array(
            array(
              'name' => 'Smartphone',
              'type' => '01010000',
            ),
            array(
                'name' => 'TV',
                'type' => '04010000',
              ),
            array(
              'name' => 'Máy Tính Bảng',
              'type' => '01020000',
            ),
            array(
                'name' => 'Galaxy Buds',
                'type' => '01040000',
              ),
            array(
                'name' => 'Phụ Kiện Di Động',
                'type' => '01050000',
              ),
            array(
            'name' => 'Tủ Lạnh',
            'type' => '08030000',
            ),
            array(
                'name' => 'Máy Giặt & Máy sấy',
                'type' => '08010000',
            ),
            array(
            'name' => 'Điều Hòa',
            'type' => '08060000',
            ),
            array(
                'name' => 'Thiết Bị Nhà Bếp',
                'type' => '08080000',
            ),
            array(
                'name' => 'Màn Hình',
                'type' => '07010000',
            ),
        );
        // tivi
        //$type = "04010000";
        // smartphone
        //$type = "01010000";
        // tablet
        //$type = "01020000";
        // smart watch
        //$type = "01030000";
        // galaxy bugs
        //$type = "01040000";
        // Phụ kiện di động
        //$type = "01050000";
        //Tủ lạnh
        //$type = "08030000";
        //Máy giặt và máy sấy
        //$type = "08010000";
        //Điều hòa di động
        //$type = "08060000";
        //thiết bị nhà bếp
        //$type = "08080000";
        //Màn hình 
        // $type ="07010000";
        foreach ($categories as $category)
        {
            $response = $client->get('https://searchapi.samsung.com/v6/front/epp/v2/product/finder/global?type='.$category['type'].'&siteCode=vn&start=1&num=100&sort=onlineavailability&onlyFilterInfoYN=N&keySummaryYN=Y&specHighlightYN=Y&companyCode=vn_congnghed&pfType=G&familyId=');

            $json = json_decode($response->getBody(), true);
            DB::table('catalogues')->updateOrInsert([
                'name' => $category['name'],
            ]);
            $cat = Catalogue::where('name',$category['name'])->first();
            foreach ($json['response']['resultData']['productList'] as $product)
            {
                $data = array();
                
                $package = new Package();
                $package->name = $product['fmyEngName'];
                $package->options = json_encode($product['chipOptions']);
                $package->save();
                foreach ($product['modelList'] as $key => $value)
                {
                    $data['price'] = $value['price'];
                    if (isset($value['galleryImage']))
                    {
                        if (count($value['galleryImage']) > 1)
                        {
                            $images =  implode(',',$value['galleryImage']);
                        }
                        else
                        {
                            $images =  $value['galleryImage'];
                        }
                    }
                    else
                    {
                        $images = $value['thumbUrl'];
                    }
                    $data['title'] =  $value['displayName'];
                    $data['code'] =  $value['modelCode'];
                    $data['description'] = json_encode($value['marketingMessage']);
                    $data['benefits_text'] = json_encode($value['formattedPriceSave']);
                    $data['key_summary'] = json_encode($value['keySummary']);
                    $data['instock'] = $value['stockStatusText'];
                    $data['sale_text'] = json_encode($value['salesText']);
                    $data['sale_price'] = $value['promotionPrice'];
                    $data['package_id']= $package->id;
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
                    //$category_id = 1;
                    DB::beginTransaction();
                    try {
                        $product = Product::create($data);
                    // $product->attributes()->sync(collect($attributes)->filter(function($item){return $item['value'];}));
                        $product->catalogues()->sync($cat->id);
                        $product->images()->sync(collect(explode(',',$images))->map(function($item){return Image::updateOrCreate(['url'=>$item]);})->pluck('id'));
                        DB::commit();
                    
                    } catch(Exception $ex) {
                        DB::rollback();
                        
                    }
                }
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
