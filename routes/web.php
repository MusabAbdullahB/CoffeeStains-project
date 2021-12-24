<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomepageController;

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
    Route::get('/contact', [ContactController::class, 'Contact'])->name('admin.contact');
    Route::get('/contact/edit', [ContactController::class, 'EditContact'])->name('edit.contact');
    Route::get('/contact/update', [ContactController::class, 'UpdateContact'])->name('update.contact');
    //Social
    Route::get('/social', [AdminController::class, 'Social'])->name('social');
    Route::get('/social/edit', [AdminController::class, 'EditSocial'])->name('edit.social');
    Route::get('/social/update', [AdminController::class, 'UpdateSocial'])->name('update.social');
    //About
    Route::get('/about', [AboutController::class, 'About'])->name('admin.about');
    Route::get('/about/edit', [AboutController::class, 'EditAbout'])->name('edit.about');
    Route::get('/about/upadte', [AboutController::class, 'UpadteAbout'])->name('update.about');
    //Profile
    Route::get('/profile', [AdminController::class, 'Profile'])->name('admin.profile');
    Route::get('/profile/edit', [AdminController::class, 'EditProfile'])->name('edit.profile');
    Route::post('/profile/update/{id}', [AdminController::class, 'UpdateProfile'])->name('update.profile');
    //Home Page
    Route::get('/homepage', [HomepageController::class, 'HomePage'])->name('homepage');
    Route::get('/hero/edit', [HomepageController::class, 'EditHero'])->name('edit.hero');
    Route::get('/hero/update', [HomepageController::class, 'UpdateHero'])->name('update.hero');
    Route::get('/logo/edit', [HomepageController::class, 'EditLogo'])->name('edit.logo');
    Route::get('/logo/update', [HomepageController::class, 'UpdateLogo'])->name('update.logo');
    //Products
    Route::get('/products', [ProductsController::class, 'AllProducts'])->name('products');
    Route::get('/products/create', [ProductsController::class, 'CreateProducts'])->name('add.products');
    Route::post('/products/store', [ProductsController::class, 'StoreProducts'])->name('store.products');
    Route::get('/products/edit/{id}', [ProductsController::class, 'EditProducts'])->name('edit.products');
    Route::put('/products/update/{id}', [ProductsController::class, 'UpdateProducts'])->name('update.products');
    Route::get('/products/delete/{id}', [ProductsController::class, 'DeleteProducts'])->name('delete.products');
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
});
/*-------- End Home Route --------*/

Route::get('/', function () {
    return view('home.home');
});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';*/
