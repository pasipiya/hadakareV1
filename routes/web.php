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



/*ADMIN PANEL ROUTES*/



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/create_users', 'UserController@index');

Route::post('/create_users', 'UserController@store');


Route::get('/logout', 'HomeController@logout');


Route::get('/password_reset', function () {
   return view('admin/password_reset');
})->middleware('auth');

/*
Route::get('/password_reset', 'Auth\ForgotPasswordController@showLinkRequestForm');


*/
Route::get('/create_user_roles', 'RoleController@index');

Route::post('/create_user_roles', 'RoleController@store');


/*
Route::get('/create_users', function () {
   return view('admin/create_users');
})->middleware('auth');
*/

Route::get('/view_profile', function () {
   return view('admin/view_profile');
})->middleware('auth');


Route::get('/edit_profile', function () {
   return view('admin/edit_profile');
})->middleware('auth');


//Route::get('/edit_saloon', 'SaloonController@index');

Route::get('/edit_saloon', 'SaloonController@index');

Route::post('/add_saloon', 'SaloonController@addSaloon');


Route::get('/saloon_admin', 'SaloonController@index');


Route::get('/booking_admin', 'BookingController@index');

Route::get('/delete_saloon/{id}', 'SaloonController@destroy');

Route::get('/delete_booking/{id}', 'BookingController@destroy');

Route::get('/delete_user/{id}', 'UserController@destroy');

Route::get('/delete_user_role/{id}', 'RoleController@destroy');

Route::get('/edit_profile', 'UserController@index_edit_user');

//Route::post('/edit_user', 'UserController@editUser');
Route::post('/user_update/{id}','UserController@editUser');


//Booking
Route::get('/accept_booking/{id}', 'BookingController@acceptBooking');
Route::get('/deactive_booking/{id}', 'BookingController@deactiveBooking');


//Saloon
Route::get('/accept_saloon/{id}', 'SaloonController@acceptSaloon');
Route::get('/deactive_saloon/{id}', 'SaloonController@deactiveSaloon');

Route::get('/create_category', 'CategoryController@index');
Route::post('/add_category', 'CategoryController@addCategory');
Route::get('/accept_category/{id}', 'CategoryController@acceptCategory');
Route::get('/deactive_category/{id}', 'CategoryController@deactiveCategory');
Route::get('/delete_category/{id}', 'CategoryController@destroy');



//Gallery
Route::get('/add_gallery', 'GalleryController@index');
Route::post('/add_gallery_image', 'GalleryController@addGalleryImage');
Route::get('/delete_image/{id}', 'GalleryController@destroy');
Route::get('/accept_image/{id}', 'GalleryController@acceptImage');
Route::get('/deactive_image/{id}', 'GalleryController@deactiveImage');

//Package
Route::get('/package', 'PackageController@index');
Route::post('/add_package', 'PackageController@addPackage');
Route::get('/delete_package/{id}', 'PackageController@destroy');
Route::get('/accept_package/{id}', 'PackageController@acceptPackage');
Route::get('/deactive_package/{id}', 'PackageController@deactivePackage');





/*MAIN WEB PAGE ROUTES*/
Route::get('main_salon',function(){
   return view('main/salon');
});

Route::get('main_trending',function(){
   return view('main/trending');
});

//salons
Route::get('/main_salons', 'SaloonController@main_index');
Route::get('/search','SaloonController@main_search_salons');
Route::get('/main_salon_account','SaloonController@show');

//trendings
//salons
Route::get('/main_trendings', 'CategoryController@main_index');
Route::get('/search_trending', 'TrendingsController@main_search_trending');





//contact
Route::get('/contact_us', 'ContactController@main_index');
Route::post('/submit_msg', 'ContactController@submitcontact');

//Contact
Route::get('/contact', 'ContactController@index');
Route::get('/delete_message/{id}', 'ContactController@destroy');

//booking
//Contact




Route::get('/more_trendings', function () {
   return view('main.more_trendings');
})->middleware('auth');
