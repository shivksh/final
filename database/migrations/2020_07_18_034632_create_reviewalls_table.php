<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviewalls', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->string('Name');
            $table->string('Brand_Type');
            $table->string('Reviews');
            $table->string('Rating');
            $table->integer('Likes')->nullable();
            $table->integer('Shares')->nullable();
            $table->string('Comments')->nullable();


            
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
        Schema::dropIfExists('reviewalls');
    }
}
