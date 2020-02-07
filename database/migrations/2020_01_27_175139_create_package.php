<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('package_name')->nullable();
            $table->string('price')->nullable();
            $table->string('saloon_id')->nullable();
            $table->string('user_id')->nullable();
            $table->string('category_id')->nullable();
            $table->string('description')->nullable();
            $table->string('pic')->nullable();
            $table->string('status')->nullable();
            $table->string('rating')->nullable();           
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
        Schema::dropIfExists('package');
    }
}
