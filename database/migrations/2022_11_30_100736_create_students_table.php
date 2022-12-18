<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('students',function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('city');
            $table->bigInteger('marks');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }


    public function down()
    {

    }
};
