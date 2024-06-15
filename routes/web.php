<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\CatalogueController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\TeamController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::get('/tu-van', [HomeController::class, 'advise'])->name('advise');
Route::any('/gioi-thieu', [HomeController::class, 'about'])->name('about');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::any('/lien-he', [HomeController::class, 'contact'])->name('contact');
Route::get('/san-pham/{alias}', [App\Http\Controllers\ProductController::class, 'detail'])->name('product.detail');
Route::get('/danh-muc/{alias}', [App\Http\Controllers\ProductController::class, 'catalogue'])->name('product.catalogue');
Route::get('/tin-tuc/', [App\Http\Controllers\PostController::class, 'index'])->name('post.list');
Route::get('/danh-muc-tin-tuc/{alias}', [App\Http\Controllers\PostController::class, 'category'])->name('post.category');
Route::get('/tim-kiem-tin-tuc', [App\Http\Controllers\PostController::class, 'search'])->name('post.search');
Route::get('/tin-tuc/{alias}', [App\Http\Controllers\PostController::class, 'detail'])->name('post.detail');
Route::get('/crawl', [App\Http\Controllers\ProductController::class, 'crawl'])->name('product.crawl');
Route::get('/getPrice', [App\Http\Controllers\ProductController::class, 'getPrice'])->name('getPrice');
Route::get('/addtocart', [App\Http\Controllers\ProductController::class, 'addtocart'])->name('addtocart');
Route::get('/cart', [App\Http\Controllers\ProductController::class, 'cart'])->name('cart');
Route::get('/gio-hang', [App\Http\Controllers\ProductController::class, 'cartIndex'])->name('cart.index');
Route::get('/thanh-toan', [App\Http\Controllers\ProductController::class, 'checkout'])->name('checkout');
Route::middleware(['auth'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('', [DashboardController::class, 'index'])->name('index');
    Route::get('logout', [DashboardController::class, 'logout'])->name('logout');
    Route::any('profile', [DashboardController::class, 'profile'])->name('profile');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //User
    Route::resource('user', UserController::class);
    //Slide
    Route::resource('slide', SlideController::class);
    //Menu
    Route::resource('menu', MenuController::class);
    //Order
    Route::resource('order', OrderController::class);
    //Category
    Route::resource('category', CategoryController::class);
    //Catalogue
    Route::resource('catalogue', CatalogueController::class);
    //Attribute
    Route::resource('attribute', AttributeController::class);
    //Post
    Route::resource('post', PostController::class);
    //Message
    Route::resource('message', MessageController::class);
    //Testimonial
    Route::resource('testimonial', TestimonialController::class);
    //Team 
    Route::resource('team', TeamController::class);
    //Attribute
    Route::resource('attribute', AttributeController::class);
    Route::prefix('post')->name('post.')->group(function () {
        Route::post('category', [PostController::class, 'category'])->name('category');
    });
    //Product
    Route::post('update_formula', [ProductController::class, 'updateFormula'])->name('product.updateFormula');
    Route::resource('product', ProductController::class);
    Route::prefix('product')->name('product.')->group(function () {
        Route::post('category', [ProductController::class, 'category'])->name('category');
    });
    //Setting
    Route::prefix('setting')->name('setting.')->group(function () {
        Route::get('', [SettingController::class, 'index'])->name('index');
        Route::post('', [SettingController::class, 'update'])->name('update');
    });
});
