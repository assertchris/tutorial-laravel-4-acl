<?php

if (!function_exists("allowed"))
{
    function allowed($route)
    {
        if (Auth::check())
        {
            foreach (Auth::user()->groups as $group)
            {
                foreach ($group->resources as $resource)
                {
                    if ($resource->name == $route)
                    {
                        return true;
                    }
                }
            }
        }

        return false;
    }
}