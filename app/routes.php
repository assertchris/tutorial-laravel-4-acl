<?php

Route::group(["before" => "guest"], function()
{
    $resources = Resource::where("secure", false)->get();

    foreach ($resources as $resource)
    {
        Route::any($resource->pattern, [
            "as"   => $resource->name,
            "uses" => $resource->target
        ]);
    }
});

Route::group(["before" => "auth"], function()
{
    $resources = Resource::where("secure", true)->get();

    foreach ($resources as $resource)
    {
        Route::any($resource->pattern, [
            "as"   => $resource->name,
            "uses" => $resource->target
        ]);
    }
});