<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChandelierProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chandelier_products', function (Blueprint $table) {
            $table->id();
            $table->string('chandelier_name')->unique();
            $table->string('chandelier_image');
            $table->string('description');
            $table->string('alt_description');
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
        Schema::dropIfExists('chandelier_products');
    }
}
