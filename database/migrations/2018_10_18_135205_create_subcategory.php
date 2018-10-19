<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcategory extends Migration
{

    public function up()
    {
        Schema::create('wiki_subCategory', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_category');
            $table->string('nombre');
            $table->string('nombre_corto')->nullable();
            $table->string('descripcion');
            $table->string('area');
            $table->string('subcarpeta');
            $table->string('icono');
            $table->string('observacion')->nullable();
            $table->string('created_by')->nullable()->unsigned();
            $table->string('updated_by')->nullable()->unsigned();
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('wiki_subCategory');
    }
}
