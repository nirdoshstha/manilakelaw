<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\AboutUsController;

Route::get('/', function () {
    return view('frontend.index');
});


//Admin Route
Route::middleware(['auth', 'isAdmin'])->group(function () {
    //Dashboard
Route::get('/dashboard','Admin\DashboardController@index');

//User Register
Route::get('dashboard/user-registered','Admin\UserRegisterController@index');
Route::get('dashboard/edit-user/{id}','Admin\UserRegisterController@editUser');
Route::put('dashboard/update-user/{id}','Admin\UserRegisterController@updateUser');
Route::get('dashboard/delete-user/{id}','Admin\UserRegisterController@deleteUser');

//Slider
Route::get('dashboard/slider','Admin\SliderController@index');
Route::get('dashboard/create-slider','Admin\SliderController@create');
Route::post('dashboard/store-slider','Admin\SliderController@store');
Route::get('dashboard/edit-slider/{id}','Admin\SliderController@edit');
Route::put('dashboard/update-slider/{id}','Admin\SliderController@update');
Route::get('dashboard/delete-slider/{id}','Admin\SliderController@destroy');

//About Us
Route::get('menu/',[MenuController::class,'index'])->name('menu.index');
Route::get('menu/create',[MenuController::class,'create'])->name('menu.create');
Route::post('menu/store',[MenuController::class,'store'])->name('menu.store');
Route::get('menu/view/{id}',[MenuController::class,'view'])->name('menu.view');
Route::get('menu/edit/{id}',[MenuController::class,'edit'])->name('menu.edit');
Route::put('menu/update/{id}',[MenuController::class,'update'])->name('menu.update');
Route::delete('menu/destroy/{id}',[MenuController::class,'destroy'])->name('menu.destroy');


//About Us
Route::get('about/',[AboutUsController::class,'index'])->name('about.index');
Route::get('about/create',[AboutUsController::class,'create'])->name('about.create');
Route::post('about/store',[AboutUsController::class,'store'])->name('about.store');
Route::get('about/view/{id}',[AboutUsController::class,'view'])->name('about.view');
Route::get('about/edit/{id}',[AboutUsController::class,'edit'])->name('about.edit');
Route::put('about/update/{id}',[AboutUsController::class,'update'])->name('about.update');
Route::delete('about/destroy/{id}',[AboutUsController::class,'destroy'])->name('about.destroy');


// Route::get('dashboard/about-us','Admin\AboutController@index');
// Route::get('dashboard/create-about-us','Admin\AboutController@create');
// Route::post('dashboard/store-about-us','Admin\AboutController@store');
// Route::get('dashboard/edit-about/{id}','Admin\AboutController@edit');
// Route::put('dashboard/update-about-us/{id}','Admin\AboutController@update');
// Route::get('dashboard/delete-about-us/{id}','Admin\AboutController@destroy');

//Our Services
Route::get('/dashboard/our-services','Admin\ServicesController@index');
Route::get('/dashboard/create-services','Admin\ServicesController@create');
Route::post('/dashboard/store-services','Admin\ServicesController@store');
Route::get('/dashboard/edit-services/{id}','Admin\ServicesController@edit');
Route::put('dashboard/update-services/{id}','Admin\ServicesController@update');
Route::get('dashboard/delete-services/{id}','Admin\ServicesController@destroy');

//Our Works
Route::get('dashboard/our-works','Admin\OurWorksController@index');
Route::get('dashboard/create-works','Admin\OurWorksController@create');
Route::post('dashboard/store-works','Admin\OurWorksController@store');
Route::get('dashboard/edit-works/{id}','Admin\OurWorksController@edit');
Route::put('dashboard/update-works/{id}','Admin\OurWorksController@update');
Route::get('dashboard/delete-works/{id}','Admin\OurWorksController@destroy');

//Review
Route::get('dashboard/review','Admin\ReviewController@index');
Route::get('dashboard/create-review','Admin\ReviewController@create');
Route::post('dashboard/store-review','Admin\ReviewController@store');
Route::get('dashboard/edit-review/{id}','Admin\ReviewController@edit');
Route::put('dashboard/update-review/{id}','Admin\ReviewController@update');
Route::get('dashboard/delete-review/{id}','Admin\ReviewController@destroy');

//Team
Route::get('dashboard/team','Admin\TeamController@index');
Route::get('dashboard/create-team','Admin\TeamController@create');
Route::post('dashboard/store-team','Admin\TeamController@store');
Route::get('dashboard/edit-team/{id}','Admin\TeamController@edit');
Route::put('dashboard/update-team/{id}','Admin\TeamController@update');
Route::get('dashboard/delete-team/','Admin\TeamController@destroy');

});


//Manager Route
Route::middleware(['auth', 'isManager'])->group(function () {
    //Manager
    Route::get('manager-dashboard','Manager\ManagerDashboardController@index');
    Route::get('/user-registered','Manager\ManagerDashboardController@userRegister');
});


//User Route
Route::middleware(['auth', 'isBan'])->group(function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});



Auth::routes();


