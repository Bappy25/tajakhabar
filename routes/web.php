<?php

return [

		/* 
		*	Declaring all web routes
		*	Make sure there is no slash (/) at the end of the route key string
		*	Each route url key must contain a class and and a method referenced with "@" as value
		*/

		// public pages

	'welcome' => 'HomeController@welcome',

		// Admin Auth Pages

	'admin/signin' => 'Admin/User/AuthController@signin',

	'admin/captcha' => 'Admin/User/AuthController@checkCaptcha',

	'admin/login' => 'Admin/User/AuthController@login',

	'admin/signup' => 'Admin/User/AuthController@signup',

	'admin/register' => 'Admin/User/AuthController@register',

	'admin/password/forgot' => 'Admin/User/AuthController@forgotPassword',

	'admin/password/mail' => 'Admin/User/AuthController@sendResetInfo',

	'admin/password/reset' => 'Admin/User/AuthController@resetPassword',

	'admin/password/update' => 'Admin/User/AuthController@updatePassword',

	'admin/signout' => 'Admin/User/AuthController@signout',

	'admin/home' => 'HomeController@home',

		// Admin News Pages 

	'admin/items/all' => 'Admin/ItemController@index',

	'admin/items/create' => 'Admin/ItemController@create',

	'admin/items/store' => 'Admin/ItemController@store',

	'admin/items/show' => 'Admin/ItemController@show',

	'admin/items/edit' => 'Admin/ItemController@edit',

	'admin/items/update' => 'Admin/ItemController@update',

	'admin/items/delete' => 'Admin/ItemController@delete',

		// Admin User Pages 

	'admin/user/show' => 'Admin/User/UserController@show',

	'admin/user/edit' => 'Admin/User/UserController@edit',

	'admin/user/edit/password' => 'Admin/User/UserController@editPassword',

	'admin/user/update' => 'Admin/User/UserController@update',

	'admin/user/update/password' => 'Admin/User/UserController@updatePassword',

];
