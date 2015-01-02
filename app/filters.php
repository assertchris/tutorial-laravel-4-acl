<?php

Route::filter('auth', function()
{
    if (Auth::guest())
    {
	    if (Request::ajax())
	    {
		    return Response::make('Unauthorized', 401);
	    }
	     
		    return Redirect::guest('/');
    }

    foreach (Auth::user()->groups as $group)
    {
	    foreach ($group->resources as $resource)
	    {
		    if ($resource->pattern == Route::getCurrentRoute()->getPath())
		    {
			    return;
		    }
	    }
    }
     
});

Route::filter("guest", function()
{
    if (Auth::check())
    {
        return Redirect::route("user/profile");
    }
});

Route::filter("csrf", function()
{
    if (Session::token() != Input::get("_token"))
    {
        throw new Illuminate\Session\TokenMismatchException;
    }
});
