<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInputOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('input_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 10);
            $table->boolean('status')->default(true);
            $table->decimal('total', 8, 2);
            $table->enum('request_type', ['web', 'api']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('input_orders');
    }
}
