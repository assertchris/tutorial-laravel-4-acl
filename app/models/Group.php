<?php

class Group
extends Eloquent
{
    protected $table = "group";

    protected $softDelete = true;

    protected $guarded = [
        "id",
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    public function resources()
    {
        return $this->belongsToMany("Resource")->withTimestamps();
    }

    public function users()
    {
        return $this->belongsToMany("User")->withTimestamps();
    }
}