<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
             $table->id();
             $table->string('itemcode');
             $table->string('itemdesc');
             $table->string('brand')->nullable();
             $table->string('sections')->nullable();
             $table->string('sizes')->nullable();
             $table->string('slno')->nullable();
             $table->string('rate');
             $table->double('MRP');
             $table->double('tax')->nullable();
             $table->string('taxtype')->nullable();
             $table->string('design')->nullable();
             $table->string('style')->nullable();
             $table->string('supplier')->nullable();
             $table->string('Category')->nullable();
             $table->string('colour')->nullable();
             $table->integer('stock')->nullable();
             $table->string('HSN')->nullable();
             $table->string('front_image');
             $table->string('add_image',1000)->nullable();
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
        Schema::dropIfExists('products');
    }
}
