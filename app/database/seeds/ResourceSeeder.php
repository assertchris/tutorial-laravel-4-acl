<?php

class ResourceSeeder
extends DatabaseSeeder
{
    public function run()
    {
        $resources = [
            [
                "pattern" => "/",
                "name"    => "user/login",
                "target"  => "UserController@loginAction",
                "secure"  => false
            ],
            [
                "pattern" => "/request",
                "name"    => "user/request",
                "target"  => "UserController@requestAction",
                "secure"  => false
            ],
            [
                "pattern" => "/reset",
                "name"    => "user/reset",
                "target"  => "UserController@resetAction",
                "secure"  => false
            ],
            [
                "pattern" => "/logout",
                "name"    => "user/logout",
                "target"  => "UserController@logoutAction",
                "secure"  => true
            ],
            [
                "pattern" => "/profile",
                "name"    => "user/profile",
                "target"  => "UserController@profileAction",
                "secure"  => true
            ],
            [
                "pattern" => "/group/index",
                "name"    => "group/index",
                "target"  => "GroupController@indexAction",
                "secure"  => true
            ],
            [
                "pattern" => "/group/add",
                "name"    => "group/add",
                "target"  => "GroupController@addAction",
                "secure"  => true
            ],
            [
                "pattern" => "/group/edit",
                "name"    => "group/edit",
                "target"  => "GroupController@editAction",
                "secure"  => true
            ],
            [
                "pattern" => "/group/delete",
                "name"    => "group/delete",
                "target"  => "GroupController@deleteAction",
                "secure"  => true
            ]
        ];

        foreach ($resources as $resource)
        {
            Resource::create($resource);
        }
    }
}