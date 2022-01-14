<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\DB;

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

/*-------- Admin Route --------*/

Route::prefix('admin')->group(function () {
    //Login
    Route::get('/login', [AdminController::class, 'Index'])->name('login.from');
    Route::get('/login/owner', [AdminController::class, 'Login'])->name('admin.login');
    //Dashboard
    Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('dashboard')->middleware('admin');
    //Logout
    Route::get('/logout', [AdminController::class, 'Logout'])->name('admin.logout')->middleware('admin');
    //Register
    Route::get('/register', [AdminController::class, 'Register'])->name('admin.register');
    Route::post('/register/create', [AdminController::class, 'RegisterCreate'])->name('admin.register.create');
    //Contact
    Route::get('/contact', [ContactController::class, 'Contact'])->name('admin.contact')->middleware('admin');
    Route::get('/contact/edit', [ContactController::class, 'EditContact'])->name('edit.contact')->middleware('admin');
    Route::post('/contact/update', [ContactController::class, 'UpdateContact'])->name('update.contact')->middleware('admin');
    //Social
    Route::get('/social', [SocialController::class, 'Social'])->name('admin.social')->middleware('admin');
    Route::get('/social/edit', [SocialController::class, 'EditSocial'])->name('edit.social')->middleware('admin');
    Route::post('/social/update', [SocialController::class, 'UpdateSocial'])->name('update.social')->middleware('admin');
    //About
    Route::get('/about', [AboutController::class, 'About'])->name('admin.about')->middleware('admin');
    Route::get('/about/edit', [AboutController::class, 'EditAbout'])->name('edit.about')->middleware('admin');
    Route::post('/about/upadte', [AboutController::class, 'UpadteAbout'])->name('update.about')->middleware('admin');
    //Profile
    Route::get('/profile', [AdminController::class, 'Profile'])->name('admin.profile')->middleware('admin');
    Route::get('/profile/edit', [AdminController::class, 'EditProfile'])->name('edit.profile')->middleware('admin');
    Route::post('/profile/update/{id}', [AdminController::class, 'UpdateProfile'])->name('update.profile')->middleware('admin');
    //Password
    Route::get('/password/show', [PasswordController::class, 'ShowPassword'])->name('show.password')->middleware('admin');
    Route::post('/password/change', [PasswordController::class, 'ChangePassword'])->name('change.password')->middleware('admin');
    //Banner
    Route::get('/banner', [BannerController::class, 'HomePage'])->name('admin.homepage')->middleware('admin');
    Route::get('/banner/edit', [BannerController::class, 'EditBanner'])->name('edit.banner')->middleware('admin');
    Route::post('/banner/update', [BannerController::class, 'UpdateBanner'])->name('update.banner')->middleware('admin');
    //Products
    Route::get('/products', [ProductsController::class, 'AllProducts'])->name('products')->middleware('admin');
    Route::get('/products/create', [ProductsController::class, 'CreateProducts'])->name('add.products')->middleware('admin');
    Route::post('/products/store', [ProductsController::class, 'StoreProducts'])->name('store.products')->middleware('admin');
    Route::get('/products/edit/{id}', [ProductsController::class, 'EditProducts'])->name('edit.products')->middleware('admin');
    Route::post('/products/update/{id}', [ProductsController::class, 'UpdateProducts'])->name('update.products')->middleware('admin');
    Route::get('/products/delete/{id}', [ProductsController::class, 'DeleteProducts'])->name('delete.products')->middleware('admin');
    //customers
    Route::get('/customers', [CustomerController::class, 'AllCustomers'])->name('customers')->middleware('admin');
    Route::get('/customers/edit/{id}', [CustomerController::class, 'EditCustomers'])->name('edit.customers')->middleware('admin');
    Route::post('/customers/update/{id}', [CustomerController::class, 'UpdateCustomers'])->name('update.customers')->middleware('admin');
    Route::get('/customers/delete/{id}', [CustomerController::class, 'DeleteCustomers'])->name('delete.customers')->middleware('admin');
    //Language
    Route::get('/lang/english', [LanguageController::class, 'English'])->name('lang.english');
    Route::get('/lang/arabic', [LanguageController::class, 'Arabic'])->name('lang.arabic');
});
/*-------- End Admin Route --------*/

/*-------- Customer Route --------*/
Route::prefix('customer')->group(function () {
    Route::get('/login', [CustomerController::class, 'Index'])->name('customer_login.from');
    Route::get('/login/owner', [CustomerController::class, 'Login'])->name('customer.login');
    Route::get('/dashboard', [CustomerController::class, 'Dashboard'])->name('customer.dashboard')->middleware('customer');
    Route::get('/logout', [CustomerController::class, 'Logout'])->name('customer.logout')->middleware('customer');
    Route::get('/register', [CustomerController::class, 'Register'])->name('customer.register');
    Route::post('/register/create', [CustomerController::class, 'RegisterCreate'])->name('customer.register.create');
});
/*-------- End Customer Route --------*/

/*-------- Home Route --------*/
Route::prefix('/')->group(function () {
    Route::get('/about', [HomeController::class, 'About'])->name('home.about');
    Route::get('/contact', [HomeController::class, 'Contact'])->name('home.contact');
    Route::get('/lang/english', [LanguageController::class, 'English'])->name('lang.english');
    Route::get('/lang/arabic', [LanguageController::class, 'Arabic'])->name('lang.arabic');
});
/*-------- End Home Route --------*/

Route::get('/', function () {
    return view('home.home');
});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';*/
