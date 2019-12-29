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
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/product/{product}', 'HomeController@product')->name('product');

Route::get('/basket', 'HomeController@basket')->name('basket');


// manager
Route::group(['prefix' => 'manager',/*'middleware' => 'Admin'*/], function () {
    Route::get("/", "HomeController@adminPage")->name('admin.home');
//manage pays
    Route::get('manage-pays', 'PayController@show');
    Route::get('remove-pay/{id}', 'PayController@removePay');
    Route::get('detail-pay/{id}', 'PayController@detailPay');

//admin manage users
    Route::get("manage-users", "UserController@showUsers");
    Route::get("show-user/{id}", "UserController@showUser");
    Route::get("remove-user/{id}", "UserController@remove");

// category
    Route::get("category", "CategoryController@show");
    Route::put("category", "CategoryController@add");
    Route::patch("category", "CategoryController@update");
    Route::get("category/delete/{id}", "CategoryController@mainDelete");
    Route::get("category/sub/delete/{id}", "CategoryController@subDelete");


// product
    Route::get("add-product", 'ProductController@show');
    Route::put("add-product", 'ProductController@add');
    Route::get("show-products", "ProductController@manageproducts");

    Route::get("remove-product/{id}", "ProductController@deleteProduct");
    Route::get("edit-product/{id}", "ProductController@show");
    Route::patch("edit-product/{id}", "ProductController@update");

//slides
    Route::get("slides/delete/{id}", "SlideController@delete");
    Route::get("slides", "SlideController@show");
    Route::put("slides", "SlideController@add");

});