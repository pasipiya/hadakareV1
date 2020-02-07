<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaloonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saloon', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->string('saloon_name')->nullable();
             $table->string('saloon_des')->nullable();
             $table->string('address')->nullable();
             $table->string('logo')->nullable();
             $table->string('status')->nullable();
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
        Schema::dropIfExists('saloon');
    }
}
