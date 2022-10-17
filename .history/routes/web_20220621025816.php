<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\LinkController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\OrderdetailController;
use App\Http\Controllers\Admin\ContactAdminController;


use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ShopcartController;
use App\Http\Controllers\Frontend\CustomerLoginController;
use App\Http\Controllers\Frontend\CustomerController;
use App\Http\Controllers\Frontend\CustomerRegisterController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\InformationController;
use App\Http\Controllers\Frontend\PaymentController;




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


//User Page
Route::get('/', [HomeController::class, 'index']);
Route::post('/search', [HomeController::class, 'allProductBySearch']);
Route::get('/category/{slug}',[HomeController::class,'allProductByCat']);
Route::get('/brand/{slug}',[HomeController::class,'allProductByBrand']);
Route::get('/detail/{slug}',[HomeController::class,'ProductDetail']);


Route::get('/customerinfor', [CustomerController::class, 'CustomerInfor']);
Route::post('/docustomer', [CustomerController::class,'doCustomer']);


Route::post('/vnpay_payment',[PaymentController::class,'Vnpay_payment']);





//Information
Route::get('/question',[InformationController::class,'Question']);
Route::get('/insurance',[InformationController::class,'Insurance']);
Route::get('/security',[InformationController::class,'Security']);
Route::get('/pay',[InformationController::class,'Pay']);
Route::get('/transport',[InformationController::class,'Transport']);
Route::get('/infor',[InformationController::class,'Infor']);
Route::get('/term',[InformationController::class,'Term']);




//Login Customer
Route::get('/login', [CustomerLoginController::class, 'login'])-> name('logincustomer');
Route::post('/dologin', [CustomerLoginController::class, 'doLogin']);


//Register Customer
Route::get('/register', [CustomerRegisterController::class, 'register'])-> name('registercustomer');
Route::post('/doregister', [CustomerRegisterController::class, 'doRegister']);


//Contact Customer
Route::get('/contact', [ContactController::class, 'contact'])-> name('contact');
Route::post('/docontact', [ContactController::class, 'doContact']);



//Logout Customer
Route::get('/logout', [CustomerLoginController::class, 'logout']);

//Cart
Route::get('/checkout', [ShopcartController::class,'checkout']);
Route::post('/doCheckOut', [ShopcartController::class,'doCheckOut']);

Route::middleware(['auth:user'])->group(function()
{
	Route::prefix('/admin/')->group(function()
	{

	//Login Admin
	Route::get('/login', [LoginController::class, 'login'])-> name('login');
	Route::post('/dologin', [LoginController::class, 'doLogin']);


	//Register Admin
	Route::get('/registeradmin', [RegisterController::class, 'registeradmin'])-> name('registeradmin');
	Route::post('/doregisteradmin', [RegisterController::class, 'doRegisteradmin']);
	
	//Logout
	Route::get('/logout', [LoginController::class, 'logout']);


	//Main
	Route::get('/', [MainController::class, 'index'])->name('admin');

	
	//Category
	Route::resource('/category', CategoryController::class);
	Route::get('/category/{id}/trash',[CategoryController::class,'trash']);
	Route::get('/category-intrash',[CategoryController::class,'intrash']);
	Route::get('/category/{id}/restore',[CategoryController::class,'restore']);
	Route::get('/category/{id}/toggleStatus',[CategoryController::class,'toggleStatus']);
	

	//Page
	Route::resource('/page', PageController::class);
	Route::get('/page/{id}/trash',[PageController::class,'trash']);
	Route::get('/page-intrash',[PageController::class,'intrash']);
	Route::get('/page/{id}/restore',[PageController::class,'restore']);
	Route::get('/page/{id}/toggleStatus',[PageController::class,'toggleStatus']);

	
	//Link
	Route::resource('/link', LinkController::class);
	Route::get('/link/{id}/trash',[LinkController::class,'trash']);
	Route::get('/link-intrash',[LinkController::class,'intrash']);
	Route::get('/link/{id}/restore',[LinkController::class,'restore']);
	Route::get('/link/{id}/toggleStatus',[LinkController::class,'toggleStatus']);

	
	//Brand
	Route::resource('/brand', BrandController::class);
	Route::get('/brand/{id}/trash',[BrandController::class,'trash']);
	Route::get('/brand-intrash',[BrandController::class,'intrash']);
	Route::get('/brand/{id}/restore',[BrandController::class,'restore']);
	Route::get('/brand/{id}/toggleStatus',[BrandController::class,'toggleStatus']);

	
	//Product
	Route::resource('/product', ProductController::class);
	Route::get('/product/{id}/trash',[ProductController::class,'trash']);
	Route::get('/product-intrash',[ProductController::class,'intrash']);
	Route::get('/product/{id}/restore',[ProductController::class,'restore']);
	Route::get('/product/{id}/toggleStatus',[ProductController::class,'toggleStatus']);



	//Customer
	Route::resource('/customer', CustomerController::class);
	Route::get('/customer/{id}/trash',[CustomerController::class,'trash']);
	Route::get('/customer-intrash',[CustomerController::class,'intrash']);
	Route::get('/customer/{id}/restore',[CustomerController::class,'restore']);
	Route::get('/customer/{id}/toggleStatus',[CustomerController::class,'toggleStatus']);


	//User
	Route::resource('/user', UserController::class);
	Route::get('/user/{id}/trash',[UserController::class,'trash']);
	Route::get('/user-intrash',[UserController::class,'intrash']);
	Route::get('/user/{id}/restore',[UserController::class,'restore']);
	Route::get('/user/{id}/toggleStatus',[UserController::class,'toggleStatus']);
	
	
	//Order
	Route::resource('/order', OrderController::class);
	Route::get('/order/{id}/trash',[OrderController::class,'trash']);
	Route::get('/order-intrash',[OrderController::class,'intrash']);
	Route::get('/order/{id}/restore',[OrderController::class,'restore']);
	Route::get('/order/{id}/toggleStatus',[OrderController::class,'toggleStatus']);
	

	//Orderdetail
	Route::resource('/orderdetail', OrderdetailController::class);
	Route::get('/orderdetail/{id}/trash',[OrderdetailController::class,'trash']);
	Route::get('/orderdetail-intrash',[OrderdetailController::class,'intrash']);
	Route::get('/orderdetail/{id}/restore',[OrderdetailController::class,'restore']);
	Route::get('/orderdetail/{id}/toggleStatus',[OrderdetailController::class,'toggleStatus']);



	//Contact
	Route::resource('/contact', ContactAdminController::class);
	Route::get('/contact/{id}/trash',[ContactAdminController::class,'trash']);
	Route::get('/contact-intrash',[ContactAdminController::class,'intrash']);
	Route::get('/contact/{id}/restore',[ContactAdminController::class,'restore']);
	Route::get('/contact/{id}/toggleStatus',[ContactAdminController::class,'toggleStatus']);
	
	
	});

	Route::get('/cart', [ShopcartController::class, 'cart']);
	Route::get('/cart_Add/{slug}', [ShopcartController::class,'cart_Add']);
	Route::get('/cart_Delete/{row_id}', [ShopcartController::class, 'cart_Delete']);
	Route::get('/cart_dec/{row_id}', [ShopcartController::class,'cart_dec']);
	Route::get('/cart_inc/{row_id}', [ShopcartController::class,'cart_inc']);

	//Customer
	Route::post('/inforcustomer/{id}',[CustomerController::class,'inforcustomer']);

});


