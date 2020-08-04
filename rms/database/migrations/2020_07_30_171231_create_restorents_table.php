<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestorentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restorents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('place');
            $table->string('discount');
            $table->string('image');
            $table->string('contact');
            $table->string('menu_item');
            $table->string('manager_name');
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
        Schema::dropIfExists('restorents');
    }
}
