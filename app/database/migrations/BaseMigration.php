<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class BaseMigration
extends Migration
{
    protected $table;

    public function getTable()
    {
        if ($this->table == null)
        {
            throw new Exception("Table not set.");
        }

        return $this->table;
    }

    public function setTable(Blueprint $table)
    {
        $this->table = $table;
        return $this;
    }

    public function addNullable($type, $key)
    {
        $types = [
            "boolean",
            "dateTime",
            "integer",
            "string",
            "text"
        ];

        if (in_array($type, $types))
        {
            $this->getTable()
                ->{$type}($key)
                ->nullable()
                ->default(null);
        }

        return $this;
    }

    public function addTimestamps()
    {
        $this->addNullable("dateTime", "created_at");
        $this->addNullable("dateTime", "updated_at");
        $this->addNullable("dateTime", "deleted_at");
        return $this;
    }

    public function addPrimary()
    {
        $this->getTable()->increments("id");
        return $this;
    }

    public function addForeign($key)
    {
        $this->addNullable("integer", $key);
        $this->getTable()->index($key);
        return $this;
    }

    public function addBoolean($key)
    {
        return $this->addNullable("boolean", $key);
    }

    public function addDateTime($key)
    {
        return $this->addNullable("dateTime", $key);
    }

    public function addInteger($key)
    {
        return $this->addNullable("integer", $key);
    }

    public function addString($key)
    {
        return $this->addNullable("string", $key);
    }

    public function addText($key)
    {
        return $this->addNullable("text", $key);
    }
}