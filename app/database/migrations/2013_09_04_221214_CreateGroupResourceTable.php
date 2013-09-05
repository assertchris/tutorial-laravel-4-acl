<?php

use Illuminate\Database\Schema\Blueprint;

class CreateGroupResourceTable
extends BaseMigration
{
    public function up()
    {
        Schema::create("group_resource", function(Blueprint $table)
        {
            $this
                ->setTable($table)
                ->addPrimary()
                ->addForeign("group_id")
                ->addForeign("resource_id")
                ->addTimestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists("group_resource");
    }
}