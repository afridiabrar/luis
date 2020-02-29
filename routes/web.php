<?php

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
Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cleared!";
});
Route::get('/', function () {
    return redirect(route('index'));
});


Route::get('/authentication', 'Web\AuthController@authentication')->name('authentication');
Route::get('contact', 'Web\PageController@contact')->name('contact');
Route::get('help', 'Web\PageController@help')->name('help');
Route::get('cart', 'Web\CartController@cart')->name('cart');
Route::get('category', 'Web\CategoryController@index')->name('category');
Route::get('category/{id}', 'Web\CategoryController@FilterCategory')->name('categoryy');
Route::get('shop', 'Web\ShopController@index')->name('shop');
Route::get('logout', 'Web\AuthController@logout')->name('logout');
Route::get('account', 'Web\UserController@account')->name('account');
Route::get('/index', 'Web\UserController@index')->name('index');
Route::post('register', 'Web\AuthController@registerUser')->name('register');
Route::post('login', 'Web\AuthController@doLogin')->name('login');
Route::post('changePassword', 'Web\UserController@change_password')->name('changePassword');
Route::get('product-detail/{id}', 'Web\CategoryController@productDetail')->name('product-detail');

Route::post('addAddress', 'Web\UserController@store')->name('addAddress');
Route::post('/UserUpdate', 'Web\UserController@update')->name('UserUpdate');
Route::post('/send_mail', 'Web\ForgotController@send_mail')->name('send_mail');
Route::post('/addCart', 'Web\CartController@store')->name('addCart');
Route::get('/removeItem/{id}', 'Web\CartController@removeItem')->name('removeItem');
Route::get('/signleCart/{id}', 'Web\CartController@singleCart')->name('signleCart');
Route::get('/order', 'Web\PageController@order')->name('order');
Route::get('/thankyou', 'Web\PageController@thankyou')->name('thankyou');

Route::post('/AjaxCart', 'Web\CartController@AjaxCart')->name('AjaxCart');

Route::get('/checkout', 'Web\ShopController@checkout')->name('checkout');
Route::post('checkoutPayment', 'Web\PaymentController@store')->name('checkoutPayment');

Route::get('MailReciept', 'Web\PaymentController@MailReciept')->name('MailReciept');

Route::get('order-detail/{id}', 'Web\PageController@orderDetail')->name('order-detail');

Route::get('term', 'Web\PageController@term')->name('term');
Route::get('privacy', 'Web\PageController@privacy')->name('privacy');

Route::get('about_us', 'Web\PageController@about')->name('about_us');

Route::post('contactStore', 'Web\PageController@contactStore')->name('contactStore');

Route::get('search', 'Web\ShopController@search')->name('search');

Route::post('show_term', 'Web\AuthController@show_term')->name('show_term');

Route::post('changeState', 'Web\UserController@changeState')->name('changeState');

