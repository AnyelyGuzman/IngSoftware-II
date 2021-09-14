<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PersonTable extends Migration
{
    
    public function up()
    {
        Schema::create('tipe_documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('name'); 
            $table->timestamps();
        });

        Schema::create('education_level', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name'); 
            $table->timestamps();
        });

        Schema::create('persons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tipedocuments_id');
            $table->foreign('tipedocuments_id')->references('id')->on('tipe_documents');
            $table->string('name'); 
            $table->string('surname'); 
            $table->string('address'); 
            $table->string('phone'); 
            $table->string('email'); 
            $table->unsignedBigInteger('educationlevel_id');
            $table->foreign('educationlevel_id')->references('id')->on('education_level');

            $table->timestamps();
        });


    }
    public function down()
    {
        Schema::dropIfExists ('persons');
        Schema::dropIfExists ('education_level');
        Schema::dropIfExists ('tipe_documents');
    }
}
