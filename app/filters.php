<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
	Config::set('auth.model', 'Company');
	Config::set('auth.table', 'companies');
	if (Session::get("admin_name") == null) {//if you are not admin
		if (Auth::guest()) return Redirect::guest('/');
	}
});

Route::filter('auth_admin', function()
{

	Config::set('auth.model', 'Admin');
	if (Auth::guest()) {
		return Redirect::guest('/admin/login');
	}
	
	if (Session::get("admin_name") == null) {
		Auth::logout();
		Config::set('auth.model', 'Company');
		Auth::logout();
		Session::flush();
		//var_dump(Session::get("admin_name"));
		return Redirect::guest('/admin/login');
	}
});

Route::filter('auth_admin_login', function()
{
	Config::set('auth.model', 'Admin');
	if (!Auth::guest()) {
		return Redirect::guest('/admin');
	}
});



Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});
