<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFile extends Migration
{
    public function up()
    {
        Schema::create('wiki_file', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_category');
            $table->integer('id_subCategory');
            $table->string('nombre');
            $table->string('archivo');
            $table->string('observacion')->nullable();
            $table->string('created_by')->nullable()->unsigned();
            $table->string('updated_by')->nullable()->unsigned();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('wiki_file');
    }
}
