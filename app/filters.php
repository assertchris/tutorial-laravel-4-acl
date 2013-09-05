<?php

Route::filter("auth", function()
{
    if (Auth::guest())
    {
        return Redirect::route("user/login");
    }
    else
    {
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

        return Redirect::route("user/login");
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