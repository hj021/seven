<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/
Route::get('/', 'HomeController@index')->name('home');

Route::post('/login', 'HomeController@login')->name('login');
Route::get('/logout', 'HomeController@login')->name('logout');
Route::get('/register', 'HomeController@registerPage')->name('register.page');
Route::post('/register', 'HomeController@register')->name('register');

Route::get('/edit', 'HomeController@editPage')->name('edit.page');
Route::post('/edit', 'HomeController@edit')->name('edit');

Route::get('/product/{product}/{slug?}', 'HomeController@product')->name('product');

Route::get('/basket', 'HomeController@basket')->name('basket');
Route::post('/add-to-basket', 'BasketController@add');


// manager
Route::group(['prefix' => 'manager',/*'middleware' => 'Admin'*/], function () {
    Route::get('/', 'HomeController@adminPage')->name('admin.home');
//home page
    Route::resource('/home', 'HomePageController');
//site setting
    Route::resource('/site-setting','SettingController');
//manage pays
    Route::get('manage-pays', 'PayController@show');
    Route::get('remove-pay/{id}', 'PayController@removePay');
    Route::get('detail-pay/{id}', 'PayController@detailPay');

//admin manage users
    Route::get('manage-users', 'UserController@showUsers');
    Route::get('show-user/{id}', 'UserController@showUser');
    Route::get('remove-user/{id}', 'UserController@remove');

// category
    Route::get('category', 'CategoryController@show');
    Route::put('category', 'CategoryController@add');
    Route::patch('category', 'CategoryController@update');
    Route::get('category/delete/{id}', 'CategoryController@mainDelete');
    Route::get('category/sub/delete/{id}', 'CategoryController@subDelete');

// product
    Route::get('add-product', 'ProductController@show');
    Route::put('add-product', 'ProductController@add');
    Route::get('show-products', 'ProductController@manageproducts');

    Route::get('remove-product/{id}', 'ProductController@deleteProduct');
    Route::get('edit-product/{id}', 'ProductController@show');
    Route::patch('edit-product/{id}', 'ProductController@update');

//slides
    Route::get('slides/delete/{id}', 'SlideController@delete');
    Route::get('slides', 'SlideController@show');
    Route::put('slides', 'SlideController@add');

});

Route::get('/test',function(){
    dd(session('basket'));
});
