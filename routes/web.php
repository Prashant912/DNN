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
});

Route::get('/', 'front\frontController@front')->name('frontend');




/*------------------------Account Section-----------------------------------
*/

Route::get('/front', 'front\frontController@front')->name('frontend');

Route::get('/front/account', 'front\frontController@accountSection')->name('account');
Route::post('/user-register', 'front\frontController@frontRegister')->name('front-register');
Route::post('/user-login', 'front\frontController@frontLogin')->name('front-login');
Route::get('/user-logout', 'front\frontController@frontLogout')->name('front-logout');



/*------------------------Admin Section login and all-----------------------------------
*/
Route::get('/admin', 'Admin\AuthController@loginform')->name('Customlogin');
Route::get('/admin/registration', 'Admin\AuthController@create')->name('registerform');
Route::post('/admin/post-registration', 'Admin\AuthController@store')->name('postRegister');

Route::post('/admin/Post-custom-login', 'Admin\AuthController@logincheck')->name('postCustomlogin');
Route::get('/admin/logout', 'Admin\AuthController@logout')->name('Customlogout');

Route::group(['middleware' => ['auth']], function () {
    //
	Route::get('/admin/home', 'Admin\HomeController@index')->name('home');
	Route::get('/admin/dashboard', 'Admin\HomeController@dashboard')->name('dash');
	Route::get('/admin/form-image-detail', 'Admin\HomeController@imageForm')->name('addImageForm');
	Route::post('/admin/post-image-detail', 'Admin\HomeController@imageDetailSave')->name('addImageDetail');


	Route::get('/admin/image-list', 'Admin\HomeController@imageList')->name('imageList');
	Route::get('/admin/yajra-list', 'Admin\HomeController@yajraList')->name('users');

	Route::get('/admin/edit-list/{id}', 'Admin\HomeController@editList')->name('editdata');
	Route::post('/admin/edits-list/{id}', 'Admin\HomeController@updatedata')->name('updatedata');
	Route::get('/admin/deletedata/{id}', 'Admin\HomeController@deletedata')->name('deletedata');
	Route::get('/admin/newscatogory', 'Admin\HomeController@NewsCategory')->name('NewsCategory');
	Route::post('/admin/latestnewscatogory', 'Admin\HomeController@StoreLatestNewsCategory')->name('LatestNewsCategory');
	Route::get('/admin/latestnewscatogorylist', 'Admin\HomeController@LatestNewsCategoryList')->name('NewsCategoryList');
	Route::get('/admin/latestnewscatogorylistyajra', 'Admin\HomeController@LatestNewsCategoryListyajra')->name('categorylistyajra');
	Route::get('/admin/Editlatestnewscatogory/{id}', 'Admin\HomeController@editNewsCategoryList')->name('editcategorylistyajra');
	Route::post('/admin/UpdateLatestnewscatogory/{id}', 'Admin\HomeController@UpdateNewsCategoryList')->name('updatecategory');
	Route::get('/admin/deleteLatestnewscatogory/{id}', 'Admin\HomeController@deleteNewsCategoryList')->name('deletecategory');
	Route::get('/admin/categorystatus/{id}/{status}', 'Admin\HomeController@categorystatus')->name('categorystatus');

	Route::get('/admin/latestNewsForm', 'Admin\HomeController@latestNewsForm')->name('latestnewsss');
	Route::post('/admin/latestNewsFormSubmit', 'Admin\HomeController@latestNewsFormPost')->name('latestNewsFormPost');
	Route::get('/admin/latestlist', 'Admin\HomeController@categoryList')->name('NewsCategoryLists');


	Route::get('/admin/editlatesnewstlist/{id}', 'Admin\HomeController@editnewcategoryList')->name('editlatestnewscategory');

	Route::get('/admin/latestnewscategorylists', 'Admin\HomeController@latestnewscategorylists')->name('latestnewscategorylists');

	Route::post('/admin/updatecategorylists', 'Admin\HomeController@updatecategorylist')->name('updatecategorylist');
	Route::get('/admin/deletecategoryss/{id}', 'Admin\HomeController@deletecategoryss')->name('deletecategorys');
	Route::get('/admin/categorystatusss/{id}/{status}', 'Admin\HomeController@categorystatusss')->name('categorystatuss');
	Route::get('/admin/featuredimages/{id}/{news_id}/{status}', 'Admin\HomeController@featuredimages')->name('featuredimage');



	// Route::get('/home', 'HomeController@index')->name('home');



	// Route::get('datatable', ['uses'=>'PostController@datatable']);
	// Route::get('datatable/getposts', ['as'=>'datatable.getposts','uses'=>'PostController@getPosts']);


	/*------------------------trending News Section-----------------------------------
	*/

	Route::get('/admin/trending', 'Admin\HomeController@trendingNewsForm')->name('Trending-News-Form');
	Route::post('/admin/trending-post', 'Admin\HomeController@trendingNewsSave')->name('TrendNewsFormPost');
	Route::Get('/admin/trending-list', 'Admin\HomeController@trendingNewsList')->name('Trending-News-List');
	Route::Get('/admin/trending-lists', 'Admin\HomeController@trendingNewsListyajra')->name('Trending-News-List-Yajra');
	Route::Get('/admin/edit-trending-lists/{id}', 'Admin\HomeController@editTrendNewsform')->name('editTrendNews');
	Route::post('/admin/update-trending-lists/{id}', 'Admin\HomeController@trendNewsUpdate')->name('TrendNewsUpdate');
	Route::get('/admin/delete-trending-lists/{id}', 'Admin\HomeController@deleteTrendNewss')->name('deleteTrendNews');
	Route::get('/admin/status-trending-lists/{id}/{status}', 'Admin\HomeController@trendStatuss')->name('TrendStatus');

});
//Auth::routes();





