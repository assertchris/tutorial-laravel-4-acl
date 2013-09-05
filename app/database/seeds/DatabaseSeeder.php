<?php

class DatabaseSeeder
extends Seeder
{
    public function run()
    {
        Eloquent::unguard();

        $this->call("ResourceSeeder");
        $this->call("UserSeeder");
    }
}