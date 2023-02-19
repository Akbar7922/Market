<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Web\Backend\BrandController;
use App\Http\Controllers\Web\Backend\ShopProductController;
use App\Http\Controllers\Web\Backend\ShopController;
use App\Http\Controllers\Web\Backend\CityController;
use App\Http\Controllers\Web\Backend\ProductController;
use App\Http\Controllers\Web\Backend\UsersController;
use App\Http\Controllers\Web\Front\SignController;
use App\Http\Controllers\Web\Front\CartController;
use App\Http\Controllers\Web\Front\FavoriteController;
use App\Http\Controllers\Web\Front\OrderController;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Front\SearchController;

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

Route::get('/a', function () {
    return public_path('image/brands/');
});

Auth::routes();
Route::post('/user/register', [SignController::class, 'register'])->name('userRegister');
Route::prefix('ajax')->group(function () {
    Route::post('/code/send', [SignController::class, 'sendCode'])->name('sendCode');
    Route::post('/code/validate', [SignController::class, 'validateCode'])->name('validateCode');
    Route::post('/state/cities', [CityController::class, 'getCities'])->name('cities');
    Route::post('/user/cart/add', [CartController::class, 'addToCart'])->name('addToCart');
    Route::post('/user/cart/delete', [CartController::class, 'deleteFromCart'])->name('deleteFromCart');
    Route::post('/main/products/search', [\App\Http\Controllers\Web\Front\ShopProductController::class, 'productsFromSerach'])->name('productsMainSearch');
    Route::post('/product/favorite/add', [FavoriteController::class, 'addProductToFavorites'])->name('addProductToFavorites');
});
// Route For Admin Panel
Route::middleware(['auth' , 'admin'])->group(function () {
    Route::resource('/admin/user', UsersController::class);
    Route::get('/admin/user/address/{user_id}', [UsersController::class, 'addresses'])->name('user.addresses');
    Route::post('/admin/user/address/add/{user_id}', [UsersController::class, 'addAddress'])->name('user.address.add');
    Route::post('/admin/user/address/delete/{user_id}', [UsersController::class, 'deleteAddress'])->name('user.address.delete');
    Route::post('/admin/user/address/update/{user_id}', [UsersController::class, 'updateAddress'])->name('user.address.update');

    Route::resource('/admin/product', ProductController::class);
    Route::resource('/admin/shop', ShopController::class);
    Route::resource('/admin/shopProduct', ShopProductController::class);

    Route::resource('/admin/brand', BrandController::class);
});
Route::post('/admin/shopProduct/{product_id}/picture/add', [ShopProductController::class, 'storePictures'])->name('storePicture');
Route::post('/admin/shopProduct/{product_id}/picture/delete', [ShopProductController::class, 'deleteProductPic'])->name('deletePicture');

// -- Web Frontend Routes  --
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/redirect/login', [HomeController::class, 'redirectToLogin'])->name('redirect_login');
Route::resource('ware', \App\Http\Controllers\Web\Front\ShopProductController::class);
Route::resource('cart', CartController::class)->middleware('auth');
Route::post('cart/submit', [CartController::class, 'submitCart'])->middleware('auth')->name('submitCart');
Route::get('checkout', [CartController::class, 'checkout'])->middleware('auth')->name('checkout');
Route::post('/order/submit/{isNew}', [OrderController::class, 'store'])->name('submitOrder');
Route::get('/pay' , [OrderController::class , 'pay']);
Route::get('/callback' , [OrderController::class , 'callback'])->name('callback');
Route::get('/search' , [SearchController::class , 'index'])->name('search');
Route::post('/ajax/search' , [SearchController::class , 'searchAjax'])->name('search_ajax');
Route::get('/about' , [HomeController::class , 'aboutUs'])->name('about');