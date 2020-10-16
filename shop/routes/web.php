<?php

use Illuminate\Support\Facades\Route;

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
Route::any( '/search', "FrontendController@search");
Route::get('/home', function () {
    return view('pages.home');
})->name('home');

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/single/{id}','FrontendController@showOneProduct')->name('single');


Route::get('/shop', "FrontendController@showShop")->name('shop');
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/getProducts','CartController@getProductsForCart');


Route::get('/shopProba', "ShopController@show")->name("shop_page");


Route::get('/cart', 'FrontendController@cartShow')->name('cart')->middleware('korisnik');
Route::post('/sendOrder','OrderController@posaljiiOrder')->name('posaljiiOrder');

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->middleware('admin');

Route::view('/contact', 'pages.contact')->middleware('korisnik');
//Route::post('/contact_admin', "ContactController@send_email_to_admin")->name("sendtoadmin");


Route::view('/register', 'pages.register');
Route::view('/login', 'pages.login')->name('login');
Route::view('/adminPrikaz', 'admin.pages.profile');

Route::get("/category/{id?}", "ShopController@ProductsByCategory");




Route::post("/doRegister", "AuthController@registerUser");

Route::post("/doLogin", "AuthController@login");

Route::get("/logoutU", "AuthController@logoutUser");


//MEJLER,PORUKA ADMINISTRATORU
Route::post("/insertMessage", "ContactController@send_email_to_admin");

Route::resource("/users","Admin\UserController")->middleware('admin');
Route::resource("/messages","Admin\MessageController")->middleware('admin');
Route::resource("/products","Admin\ProductController") ->middleware('admin');



Route::fallback(function () {
    return view('pages.404');
});