<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagzineDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magzine_data', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->string('Email');
            $table->string('Name');
            $table->string('Brand');
            $table->mediumText('Image'); 
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
        Schema::dropIfExists('magzine_data');
    }
}
