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


Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/market', function () {
    return view('market');
});
Route::get('/offers', function () {
    return view('offers');
}) -> name('offer');
Route::get('/platform', function () {
    return view('platform');
})->name('platform');
Route::get('/preview', function () {
    return view('preview');
});

Route::get('/dashboard', 'CpanelController@index')->name('cpanel-index');

/**Category Routes */
Route::get('/Categories/{type}', 'Controllers\CategoryController@index')->name('categories');
Route::get('AddCategory/{type}', 'CategoryController@AddCategory') -> name('AddCategory');
Route::post('storeCategory', 'Controllers\CategoryController@storeCategory') -> name('storeCategory');
Route::get('editCategory/{offer_id}', 'CategoryController@editCategory')->name('editCategory');
 Route::post('updateCat/{offer_id}', 'CategoryController@updateCategory')->name('updateCategory');
 Route::post('deleteCategory/{offer_id}', 'Controllers\CategoryController@deleteCategory')->name('deleteCategory');

 /************************************************************************************************************/

/**SubCategory Routes */
Route::get('/subCategory/{type}', 'SubCategoryController@index')->name('subCats');
Route::get('AddSubCategory/{type}', 'SubCategoryController@AddCategory') -> name('AddSubCategory');
Route::post('storeSubCategory', 'Controllers\SubCategoryController@storeCategory') -> name('storeSubCategory');
Route::get('editSubCategory/{offer_id}', 'SubCategoryController@editCategory')->name('editSubCategory');
 Route::post('updateSubCat/{offer_id}', 'SubCategoryController@updateCategory')->name('updateSubCat');
 Route::get('deleteSubCategory/{offer_id}', 'SubCategoryController@deleteCategory')->name('deleteSubCategory');

 /************************************************************************************************************/

 /**Product Routes */
Route::get('/products/{type}', 'ProductController@index')->name('products');
Route::get('AddProduct/{type}', 'ProductController@AddProduct') -> name('AddProduct');
Route::post('storeProduct', 'ProductController@storeProduct') -> name('storeProduct');
Route::get('editProduct/{offer_id}', 'ProductController@editProduct')->name('editProduct');
 Route::post('updateProduct/{offer_id}', 'ProductController@updateProduct')->name('updateProduct');
 Route::get('deleteProduct/{offer_id}', 'ProductController@deleteProduct')->name('deleteProduct');

 /************************************************************************************************************/

  /**offers Routes */
Route::get('/offers', 'OfferController@index')->name('offers');
Route::get('AddOffer', 'OfferController@AddOffer') -> name('AddOffer');
Route::post('storeOffer', 'OfferController@storeOffer') -> name('storeOffer');
Route::get('editOffer/{offer_id}', 'OfferController@editOffer')->name('editOffer');
 Route::post('updateOffer/{offer_id}', 'OfferController@updateOffer')->name('updateOffer');
 Route::get('deleteOffer/{offer_id}', 'OfferController@deleteOffer')->name('deleteOffer');

 /************************************************************************************************************/
