
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'UserController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');



Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/admin/users', 'UserController@index')->name('users');
Route::get('/admin/users/create', 'UserController@create')->name('users_create');
Route::post('/admin/users/store', 'UserController@store')->name('users_store');
Route::get('/admin/users/edit/{id}', 'UserController@edit')->name('users_edit');
Route::get('/admin/users/delete/{id}', 'UserController@destroy')->name('users_delete');
Route::post('/admin/users/update', 'UserController@update')->name('users_update');


Route::get('/admin/product', 'ProductController@index_pro')->name('product');
Route::get('/admin/product/create', 'ProductController@create_pro')->name('product_create');
Route::post('/admin/product/store', 'ProductController@store_pro')->name('product_store');
Route::get('/admin/product/edit/{id}', 'ProductController@edit_pro')->name('product_edit');
Route::get('/admin/product/delete/{id}', 'ProductController@destroy_pro')->name('product_delete');
Route::post('/admin/product/update', 'ProductController@update_pro')->name('product_update');
Route::get('/admin/product/{id}', 'ProductController@show_pro')->name('product_show');