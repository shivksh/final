<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLikeToCompanyalldetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companyalldetails', function (Blueprint $table) {
            //
            $table->integer('Likes');
            $table->integer('Total_reviews');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companyalldetails', function (Blueprint $table) {
            //
            $table->dropColumn('Likes');
            $table->dropColumn('Total_reviews');
        });
    }
}
