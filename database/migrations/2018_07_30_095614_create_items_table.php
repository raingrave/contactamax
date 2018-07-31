<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('input_order_id')->nullable();
//            $table->unsignedInteger('output_order_id')->nullable();
            $table->integer('quantity')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('product_id')
                  ->references('id')
                  ->on('products');

            $table->foreign('input_order_id')
                  ->references('id')
                  ->on('input_orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
