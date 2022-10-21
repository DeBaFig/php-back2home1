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
            $table->string('user_id', 50); 
            $table->string('name', 100);
            $table->string('cpf',14)->unique();
            $table->string('email', 50)->nullable();
            $table->string('address_owner', 100)->nullable();            
            $table->string('number_owner', 50)->nullable();
            $table->string('district_owner', 100)->nullable();
            $table->string('city_owner', 100)->nullable();
            $table->enum('state_owner', ["AC","AL","AP","AM","BA","CE","DF","ES","GO","MA","MT","MS","MG","PA","PB","PR","PE","PI","RJ","RN","RS","RO","RR","SC","SP","SE","TO"])->nullable();
            $table->string('cep_owner',9)->nullable();
            $table->string('phone',19)->nullable();
            $table->tinyInteger('isActive')->default(1);
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
