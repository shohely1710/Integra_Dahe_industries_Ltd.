<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/','Frontend\HomeController@index');
Route::get('/profile','Frontend\HomeController@profile');
Route::get('/product','Frontend\ProductsController@create');
Route::get('/product','Frontend\ProductsController@index')->name('product');
Route::get('/gallery','Frontend\HomeController@gallery');
//Route::get('/contact','HomeController@contact');
Route::get('/contact','Frontend\ContactController@create');
Route::post('/contact','Frontend\ContactController@store');


/*all the routes for product controller for frontend pages*/

  Route::get('/product/{slug}', 'Frontend\ProductsController@show')->name('products.show');
  Route::get('/new/search', 'Frontend\HomeController@search')->name('search');
  Route::get('/categories', 'Frontend\CategoriesController@index')->name('categories.index');
  Route::get('/category/{id}', 'Frontend\CategoriesController@show')->name('categories.show');


/* end all the routes for product controller for frontend pages*/

//Route::get('/contact','RFQController@create');
//Route::post('/contact','RFQController@store');








/*
** backend routes
*/
Route::group(['prefix' => 'admin'], function(){
    Route::get('/', 'Backend\DashboardController@index')->name('admin.dashboard');
});


//require 'admin.php';

/*login & registration routes*/
Route::get('/', 'HomeController@index')->name('home');

/* special routes */
//Route::get('/admin/protected', function (){
//    echo 'admin.route';
//
//})->middleware('admin');


 Auth::routes();
Route::group(['prefix'=>'admin','middleware'=>['auth']],function (){
    Route::get('/','Admin\DashboardController@index')->name('admin.dashboard');
});



Route::group(['prefix' => 'admin', 'middleware'=>['auth']], function(){
    Route::get('/', 'Backend\DashboardController@index')->name('admin.dashboard');
});


Route::get('/', 'Frontend\HomeController@index')->name('home');


/*sliders routes*/


    Route::get('/admin/sliders', 'Backend\SlidersController@index')->name('admin.sliders');
    Route::post('/admin/sliders/store', 'Backend\SlidersController@store')->name('admin.slider.store');
    Route::post('/admin/sliders/edit/{id}','Backend\SlidersController@update')->name('admin.sliders.update');
    Route::post('/admin/sliders/delete/{id}', 'Backend\SlidersController@delete')->name('admin.sliders.delete');

/*end sliders routes*/

/*profiles routes*/


    Route::get('/admin/profiles', 'Backend\ProfileController@index')->name('admin.profiles');
    Route::post('/admin/profiles/store', 'Backend\ProfileController@store')->name('admin.profile.store');
    Route::post('/admin/profiles/edit/{id}','Backend\ProfileController@update')->name('admin.profiles.update');
    Route::post('/admin/profiles/delete/{id}', 'Backend\ProfileController@delete')->name('admin.profiles.delete');

/*end profiles routes*/

/*gallery routes*/

Route::get('/admin/gallery','Backend\GalleryController@index')->name('admin.gallery');
//    Route::get('/admin/products','Backend\ProductsController@manage_products')->name('admin.products');
Route::get('/admin/gallery/create','Backend\GalleryController@create')->name('admin.gallery.create');

Route::post('/admin/gallery/store','Backend\GalleryController@store')->name('admin.gallery.store');
Route::get('/admin/gallery/edit/{id}','Backend\GalleryController@edit')->name('admin.gallery.edit');
Route::post('/admin/gallery/edit/{id}','Backend\GalleryController@update')->name('admin.gallery.update');

Route::post('/admin/gallery/delete/{id}','Backend\GalleryController@delete')->name('admin.gallery.delete');


/*end gallery routes*/

//cart routes
Route::group(['prefix' => 'carts'], function(){
    Route::get('/', 'Frontend\CartsController@index')->name('carts');
    Route::post('/store', 'Frontend\CartsController@store')->name('carts.store');

});

/*menu bar routes*/

Route::get('/admin/menu','Backend\MenuController@index')->name('admin.menu');
//    Route::get('/admin/products','Backend\ProductsController@manage_products')->name('admin.products');
Route::get('/admin/menu/create','Backend\MenuController@create')->name('admin.menu.create');

Route::post('/admin/menu/store','Backend\MenuController@store')->name('admin.menu.store');
Route::get('/admin/menu/edit/{id}','Backend\MenuController@edit')->name('admin.menu.edit');
Route::post('/admin/menu/edit/{id}','Backend\MenuController@update')->name('admin.menu.update');

Route::post('/admin/menu/delete/{id}','Backend\MenuController@delete')->name('admin.menu.delete');


/*end menu bar routes*/

/*products routes*/

    Route::get('/admin/products','Backend\ProductsController@index')->name('admin.products');
//    Route::get('/admin/products','Backend\ProductsController@manage_products')->name('admin.products');
    Route::get('/admin/products/create','Backend\ProductsController@create')->name('admin.products.create');

    Route::post('/admin/products/store','Backend\ProductsController@store')->name('admin.product.store');
    Route::get('/admin/products/edit/{id}','Backend\ProductsController@edit')->name('admin.products.edit');
    Route::post('/admin/products/edit/{id}','Backend\ProductsController@update')->name('admin.products.update');

    Route::post('/admin/products/delete/{id}','Backend\ProductsController@delete')->name('admin.products.delete');


/*end products routes*/

/*categories routes*/

Route::get('/admin/categories','Backend\CategoriesController@index')->name('admin.categories');
//    Route::get('/admin/products','Backend\ProductsController@manage_products')->name('admin.products');
Route::get('/admin/categories/create','Backend\CategoriesController@create')->name('admin.categories.create');

Route::post('/admin/category/store','Backend\CategoriesController@store')->name('admin.category.store');
Route::get('/admin/categories/edit/{id}','Backend\CategoriesController@edit')->name('admin.categories.edit');
Route::post('/admin/categories/edit/{id}','Backend\CategoriesController@update')->name('admin.categories.update');

Route::post('/admin/categories/delete/{id}','Backend\CategoriesController@delete')->name('admin.categories.delete');



/*end categories routes*/



/*brands routes*/

Route::get('/admin/brands','Backend\BrandsController@index')->name('admin.brands');
//    Route::get('/admin/products','Backend\ProductsController@manage_products')->name('admin.products');
Route::get('/admin/brands/create','Backend\BrandsController@create')->name('admin.brands.create');

Route::post('/admin/brand/store','Backend\BrandsController@store')->name('admin.brand.store');
Route::get('/admin/brands/edit/{id}','Backend\BrandsController@edit')->name('admin.brands.edit');
Route::post('/admin/brands/edit/{id}','Backend\BrandsController@update')->name('admin.brands.update');

Route::post('/admin/brands/delete/{id}','Backend\BrandsController@delete')->name('admin.brands.delete');



/*end brands routes*/

/*company image routes*/

Route::get('/admin/coms','Backend\CompanyImagesController@index')->name('admin.coms');
//    Route::get('/admin/products','Backend\ProductsController@manage_products')->name('admin.products');
Route::get('/admin/coms/create','Backend\CompanyImagesController@create')->name('admin.coms.create');

Route::post('/admin/com/store','Backend\CompanyImagesController@store')->name('admin.com.store');
Route::get('/admin/coms/edit/{id}','Backend\CompanyImagesController@edit')->name('admin.coms.edit');
Route::post('/admin/coms/edit/{id}','Backend\CompanyImagesController@update')->name('admin.coms.update');

Route::post('/admin/coms/delete/{id}','Backend\CompanyImagesController@delete')->name('admin.coms.delete');



/*end company image routes*/


/*enterprise image routes*/

Route::get('/admin/enterprise','Backend\EnterpriseController@index')->name('admin.enterprise');
//    Route::get('/admin/products','Backend\ProductsController@manage_products')->name('admin.products');
Route::get('/admin/enterprise/create','Backend\EnterpriseController@create')->name('admin.enterprise.create');

Route::post('/admin/store','Backend\EnterpriseController@store')->name('admin.enterprise.store');
Route::get('/admin/enterprise/edit/{id}','Backend\EnterpriseController@edit')->name('admin.enterprise.edit');
Route::post('/admin/enterprise/edit/{id}','Backend\EnterpriseController@update')->name('admin.enterprise.update');

Route::post('/admin/enterprise/delete/{id}','Backend\EnterpriseController@delete')->name('admin.enterprise.delete');



/*end enterprise image routes*/






