<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BeerhourDb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema:: create("beerhour_db", function(Blueprint $table){
          $table->increments("id");
          $table->string("name");
          $table->string("surname");
          $table->string("email");
          $table->string("password");
          $table->date("fechanac");
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop("");
    }
}
