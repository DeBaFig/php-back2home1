<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('cpf',14);
            $table->string('email', 50)->nullable();
            $table->string('adress', 100)->nullable();            
            $table->string('number', 50)->nullable();
            $table->string('district', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->enum('state', ["1+","2+","3+","4+","5+","6+","7+","8+","9+","10+","11+","12+","13+","14+","15+","16+","17+","18+","19+","20+","21+","22+","23+","24+","25+","26+","27+"])->nullable();
            $table->string('cep',9);
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
        Schema::dropIfExists('owners');
    }
};
