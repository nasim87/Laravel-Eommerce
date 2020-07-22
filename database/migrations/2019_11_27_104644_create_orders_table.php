<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('product_id')->unsigned()->nullable();
            $table->integer('ip_address')->unsigned()->nullable();
            $table->integer('order_number');
            $table->string('name');
            $table->string('phone');
            $table->text('shipping_address');
            $table->text('message')->nullable();
            $table->string('email')->nullable();
            $table->boolean('is_paid')->default(0);
            $table->boolean('is_completed')->default(0);
            $table->boolean('is_seenBy_admin')->default(0);
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
        Schema::dropIfExists('orders');
    }
}
