<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->integer('reference')->unique();
            $table->string('description', 255)->nullable();
            $table->string('address', 150)->nullable();
            $table->integer('total_size');
            $table->integer('useful_size');
            $table->integer('private_size');
            $table->integer('price');
            $table->integer('townhouse_price')->nullable();
            $table->enum('master_bedrooms', ["1+","2+","3+","4+","5+"])->nullable();
            $table->enum('bedrooms', ["1+","2+","3+","4+","5+"])->nullable();
            $table->enum('bathroom', ["1+","2+","3+","4+","5+"])->nullable();
            $table->enum('parking_lot', ["1+","2+","3+","4+","5+"])->nullable();
            $table->enum('property_type', ["Apartamento","Kitnet","Cobertura","Triplex","Casa","Chácara","Comercial","Geminado","Loja","Pousada","Sobrado","Terreno"]);
            $table->timestamp('publish_at');
            $table->enum('status', ["Ativo","Excluído","Pausado"])->default('Ativo');
            $table->enum('purpose', ["Comprar","Alugar"]);
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
        Schema::dropIfExists('properties');
    }
}
