<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractingCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracting_companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('designation')->unique();
            $table->string('activity_sector',75);
            $table->string('locale',75);
            $table->string('products_services',350);
            $table->string('description_functions',350);
            $table->string('path');
            $table->string('state');
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
        Schema::drop('contracting_companies');
    }
}
