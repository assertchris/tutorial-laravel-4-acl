<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User
extends Eloquent
implements UserInterface, RemindableInterface
{
    protected $table = "user";

    protected $hidden = ["password"];

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getReminderEmail()
    {
        return $this->email;
    }

    public function groups()
    {
        return $this->belongsToMany("Group")->withTimestamps();
    }
}