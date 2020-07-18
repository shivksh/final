<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyalldetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companyalldetails', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->string('Email');
            $table->string('Name');
            $table->string('CEO');
            $table->string('Contact');
            $table->string('Details');
            $table->string('Website');
            $table->string('Brand_Type');
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
        Schema::dropIfExists('companyalldetails');
    }
}
