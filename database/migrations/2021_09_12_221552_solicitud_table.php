<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SolicitudTable extends Migration
{
    
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('persons_id');
            $table->foreign('persons_id')->references('id')->on('persons');
            $table->string('description');
            $table->timestamps();
        });
        Schema::create('answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('requests_id');
            $table->foreign('requests_id')->references('id')->on('requests');
            $table->string('description');
            $table->string('observation'); 
            $table->timestamps();
        });
        

    }

    
    public function down()
    {
        Schema::dropIfExists ('requests');
        Schema::dropIfExists ('answers');
    }
}
