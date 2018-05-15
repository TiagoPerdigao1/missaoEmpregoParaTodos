<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubProceduresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_procedures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->string('description');
            $table->string('link');
            $table->unsignedInteger('procedure_id');
            $table->foreign('procedure_id')->references('id')->on('procedures');
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
        Schema::drop('sub_procedures');
    }
}
