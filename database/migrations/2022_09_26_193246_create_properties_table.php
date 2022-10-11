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
            $table->integer('popular')->default(0);
            $table->integer('destaque')->default(0);
            $table->string('user_id');
            $table->integer('reference_n')->unique();
            $table->string('title');
            $table->string('description', 255)->nullable();
            $table->string('address')->nullable();
            $table->string('number', 50)->nullable();
            $table->string('district', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('cep', 10)->nullable();
            $table->enum('state', ["1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27"])->nullable();
            $table->integer('total_size')->nullable();
            $table->integer('useful_size')->nullable();
            $table->integer('private_size')->nullable();
            $table->integer('price')->nullable();
            $table->integer('isActive')->default(1);
            $table->integer('townhouse_price')->nullable();
            $table->enum('master_bedrooms', ["1","2","3","4","5+"])->nullable();
            $table->enum('bedrooms', ["1","2","3","4","5+"])->nullable();
            $table->enum('bathroom', ["1","2","3","4","5+"])->nullable();
            $table->enum('parking_lot', ["1","2","3","4","5+"])->nullable();
            $table->enum('property_type', ["Apartamento","Kitnet","Cobertura","Área","Casa","Chácara","Comercial","Residencial","Geminado","Loja","Pousada","Sobrado","Terreno","Triplex"]);
            $table->timestamp('publish_at');
            $table->enum('purpose', ["comprar","alugar"]);
            $table->string('comments', 255)->nullable();
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
