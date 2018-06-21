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
    return view('index');
});

Route::get('/landing', function() {
    return view('landing');
});

Route::get('/signup', function() {
    return redirect('/registration');
});

Route::get('/registration', function() {
    return view('register');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/houseownershipsignup', function() {
    return view('houseOwnershipSignup');
});

Route::get('/kekebikeownershipsignup', function() {
    return view('kekeBikeOwnershipSignup');
});

Route::get('/financialempowermentsignup', function() {
    return view('financialEmpowermentSignup');
});

Route::get('/member', function() {
    return view('member.index');
});

Route::get('/network', function() {
    return view('member.network');
});

Route::get('/changepassword', function() {
    return view('member.changepassword');
});


Route::get('/admin', function() {
    return view('admin.index');
});

Route::get('/admin/singlemember', function() {
    return view('admin.singlemember');
});

Route::get('/admin/singlememberportfolio', function() {
    return view('admin.singlememberportfolio');
});

Route::get('/admin/changepassword', function() {
    return view('admin.changepassword');
});

Route::get('/admin/allmembers', function() {
    return view('admin.allmembers');
});

Route::get('/home', 'HomeController@showMember');

Route::get('/login', function() {
    return view('login');
});



Route::post('/register', 'Auth\RegisterController@register');

Route::post('/login', 'Auth\LoginController@login');

Route::get('/dashboard', 'DashboardController@showDashboard');

Route::group(['middleware' => ['coordinator'], 'prefix' => 'admin'], function() {
    Route::get('/', 'Admin\IndexController@show');
    Route::get('/members/{id}', 'Admin\MemberController@show');
    Route::post('/approvemember', 'Admin\MemberController@approveMember');
    Route::post('/disapprovemember', 'Admin\MemberController@disapproveMember');
    Route::get('/activateaccount/{userId}', 'Admin\AccountController@activateAccount');
    Route::get('/deactivateaccount/{userId}', 'Admin\AccountController@deactivateAccount');
    Route::get('/members/{id}/portfolios', 'Admin\PortfolioController@showMemberPortfolios');
    Route::get('/members', 'Admin\MemberController@index');
    Route::get('/portfolios/{id}', 'Admin\PortfolioController@show');
    Route::post('/approveportfolio', 'Admin\PortfolioController@approvePortfolio');
    Route::post('/disapproveportfolio', 'Admin\PortfolioController@disapprovePortfolio');
});

Route::group(['middleware' => ['coordinator'], 'prefix' => 'admin'], function() {
    Route::get('/coordinator/add', 'Admin\CoordinatorController@create');
    Route::post('/coordinators', 'Admin\CoordinatorController@store');
    Route::get('/coordinators', 'Admin\CoordinatorController@index');
});

Route::group(['middleware' => ['member'], 'prefix' => 'member'], function() {
    Route::get('/', 'Member\IndexController@show');
    Route::get('/portfolio', 'Member\PortfolioController@show');
    Route::get('/network', 'Member\NetworkController@show');
});

Route::post('/changepassword', 'ChangePasswordController@changePassword')->middleware('auth');
Route::get('/logout', 'LogoutController@logout');


Auth::routes();