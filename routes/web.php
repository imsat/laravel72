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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', [
    'uses' => 'BigStoreController@index',
    'as' => '/'
    ]);
Route::get('/contact-us', [
    'uses' => 'BigStoreController@contactUs',
    'as' => 'contact'
    ]);
Route::get('/hair-care', [
    'uses' => 'BigStoreController@hairCare',
    'as' => 'care'
    ]);
Route::get('/single-product', [
    'uses' => 'BigStoreController@singleProduct',
    'as' => 'single'
    ]);
Route::get('/category/add', [
    'uses' => 'CategoryController@addCategory',
    'as' => 'add-category'
    ]);
Route::get('/category/manage', [
    'uses' => 'CategoryController@manageCategory',
    'as' => 'manage-category'
    ]);
Route::post('/category/save', [
    'uses' => 'CategoryController@saveCategory',
    'as' => 'new-category'
    ]);
Route::get('/category/unpublished/{id}', [
    'uses' => 'CategoryController@unpublishedCategory',
    'as' => 'unpublished-category'
    ]);
Route::get('/category/published/{id}', [
    'uses' => 'CategoryController@publishedCategory',
    'as' => 'published-category'
    ]);
Route::get('/category/edit/{id}', [
    'uses' => 'CategoryController@editCategory',
    'as' => 'edit-category'
    ]);
Route::post('/category/update', [
    'uses' => 'CategoryController@updateCategory',
    'as' => 'update-category'
    ]);
Route::get('/category/delete/{id}', [
    'uses' => 'CategoryController@deleteCategory',
    'as' => 'delete-category'
    ]);



