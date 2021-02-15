<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
// Use Alert;





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

//comman Route
Auth::routes();
Route::get('/','pagesContoller@index');
Route::get('/shop','pagesContoller@shop');
Route::get('/about','pagesContoller@about');
Route::get('/contact','pagesContoller@contact');
Route::get('/admin','AdminController@index')->name('adminDashboard');
Route::get('/user','UserController@index')->name('user');

//logout for admin
Route::get('/logout','\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// login 
Route::get('/userlogin', function () {
    return view('auth/login');  
})->name('userLogin');


// admin route
// for send request to admin registration 
Route::post('/adminreg','AdminController@adminCreate')->name('adminRegister');

//admin register ui
Route::get('/admincreate','AdminController@reg')->name('admin.register');

//admin user details update 
Route::post('/adminupdate','AdminController@adminUpdate')->name('admin.update');

//admmin delete 
Route::get('/admindelete/{delete_mail}','AdminController@adminDelete')->name('admin.delete');

//display user details
Route::get('/userview','AdminController@userView')->name('admin.view');

//customer route 
// for send request to customer registration 
Route::post('/customerreg','CustomerController@customerCreate')->name('customerRegister');

//customer register ui 
Route::get('/customerCreate','CustomerController@reg')->name('customer.register');

//custome main dashboad 

Route::get('/cu-dashboard', function () {
    return view('customer.cu-dashboard');
})->name('customer.dashboard');






//Order handling routes 


Route::get('/test','tets@test'); //place order demo 

//order place form request 
Route::post('/placeorder','OrderController@placeOrder')->name('place.order');

//view order details 
route::get('/vieworder','OrderController@viewOrder')->name('view.order')->middleware('role:administrator');

// show order details to customer 
route::get('/cusorder','OrderController@cusOrderDetails')->name('customer.order.details');

//order status update 
Route::post('/orderstatus','OrderController@statusUpdate')->name('order.status.update');


// Eran .....................
// show tools page to admin
Route::get('/toolsadd', 'ToolsController@index')->name('admin.toolsadd');

// addtool into table
Route::post('/addtool', 'ToolsController@inserttool')->name('addtool');

// show tools table
Route::get('/toolsview', 'ToolsController@display')->name('admin.toolsview');

// update page go url (in view page update btn)
Route::get('/updatetoolbtn/{id}','ToolsController@updatebtn');

// click update button function
Route::put('/updatetool/{id}', 'ToolsController@update');

//delete button
Route::get('/deletetoolbtn/{id}','ToolsController@deletebtn');

//...........Customer part ..............
// view tools page to customer
Route::get('/showtools','ToolsController@showtools')->name('customer.showtools');

// to order tool page(productLayout)
Route::get('/ordertoolbtn/{id}','ToolsController@ordertoolbtn');
// End Eran ...........................