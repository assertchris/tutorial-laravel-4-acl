<?php

class Resource
extends Eloquent
{
    protected $table = "resource";

    protected $softDelete = true;

    protected $guarded = [
        "id",
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    public function groups()
    {
        return $this->belongsToMany("Group")->withTimestamps();
    }
}