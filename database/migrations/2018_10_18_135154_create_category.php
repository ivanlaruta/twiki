<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategory extends Migration
{
    public function up()
    {
        Schema::create('wiki_category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('nombre_corto')->nullable();
            $table->string('descripcion');
            $table->string('sistema')->nullable();
            $table->string('carpeta')->nullable();
            $table->string('observacion')->nullable();
            $table->string('created_by')->nullable()->unsigned();
            $table->string('updated_by')->nullable()->unsigned();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('wiki_category');
    }
}
