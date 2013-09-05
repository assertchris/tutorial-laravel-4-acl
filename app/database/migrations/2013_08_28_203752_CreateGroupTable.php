<?php

use Illuminate\Database\Schema\Blueprint;

class CreateGroupTable
extends BaseMigration
{
    public function up()
    {
        Schema::create("group", function(Blueprint $table)
        {
            $this
                ->setTable($table)
                ->addPrimary()
                ->addString("name")
                ->addTimestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists("group");
    }
}