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
    'uses' => 'CategoryController@index',
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
Route::get('/brand/add', [
    'uses' => 'BrandController@index',
    'as' => 'add-brand'
    ]);
Route::post('/brand/save', [
    'uses' => 'BrandController@saveBrand',
    'as' => 'new-brand'
]);
Route::get('/brand/manage', [
    'uses' => 'BrandController@manageBrand',
    'as' => 'manage-brand'
]);
Route::get('/brand/unpublished/{id}', [
    'uses' => 'BrandController@unpublishedBrand',
    'as' => 'unpublished-brand'
]);
Route::get('/brand/published/{id}', [
    'uses' => 'BrandController@publishedBrand',
    'as' => 'published-brand'
]);
Route::get('/brand/edit/{id}', [
    'uses' => 'BrandController@editBrand',
    'as' => 'edit-brand'
]);
Route::post('/brand/update', [
    'uses' => 'BrandController@updateBrand',
    'as' => 'update-brand'
]);
Route::get('/brand/delete/{id}', [
    'uses' => 'BrandController@deleteBrand',
    'as' => 'delete-brand'
]);
Route::get('/product/add', [
    'uses' => 'ProductController@index',
    'as' => 'add-product'
]);
Route::post('/product/save', [
    'uses' => 'ProductController@saveProduct',
    'as' => 'new-product'
]);
Route::get('/product/manage', [
    'uses' => 'ProductController@manageProduct',
    'as' => 'manage-product'
]);
Route::get('/product/view/{id}', [
    'uses' => 'ProductController@viewProductDetails',
    'as' => 'view-product'
]);
Route::get('/product/unpublished/{id}', [
    'uses' => 'ProductController@unpublishedProduct',
    'as' => 'unpublished-product'
]);
Route::get('/product/published/{id}', [
    'uses' => 'ProductController@publishedProduct',
    'as' => 'published-product'
]);
Route::get('/product/edit/{id}', [
    'uses' => 'ProductController@editProduct',
    'as' => 'edit-product'
]);
Route::post('/product/update', [
    'uses' => 'ProductController@updateProduct',
    'as' => 'update-product'
]);
Route::get('/product/delete/{id}', [
    'uses' => 'ProductController@deleteProduct',
    'as' => 'delete-product'
]);



