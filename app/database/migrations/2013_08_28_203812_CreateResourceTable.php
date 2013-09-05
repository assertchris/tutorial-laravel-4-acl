<?php

use Illuminate\Database\Schema\Blueprint;

class CreateResourceTable
extends BaseMigration
{
    public function up()
    {
        Schema::create("resource", function(Blueprint $table)
        {
            $this
                ->setTable($table)
                ->addPrimary()
                ->addString("name")
                ->addString("pattern")
                ->addString("target")
                ->addBoolean("secure")
                ->addTimestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists("resource");
    }
}