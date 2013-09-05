<?php

use Illuminate\Database\Schema\Blueprint;

class CreateGroupUserTable
extends BaseMigration
{
    public function up()
    {
        Schema::create("group_user", function(Blueprint $table)
        {
            $this
                ->setTable($table)
                ->addPrimary()
                ->addForeign("group_id")
                ->addForeign("user_id")
                ->addTimestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists("group_user");
    }
}