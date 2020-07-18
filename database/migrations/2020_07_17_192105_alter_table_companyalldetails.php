<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableCompanyalldetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companyalldetails', function (Blueprint $table) {
            $table->string('Brand_Type')->after('Brand Type');
            $table->integer('Average')->nullable();
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
            $table->dropColumn('Brand_Type');
            $table->dropColumn('Average');
            });
    }
}
