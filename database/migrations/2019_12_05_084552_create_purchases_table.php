<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id')->unsigned()->nullable();
            $table->string('name');
            $table->string('qty');
            $table->string('size');
            $table->string('color');
            $table->string('model');
            $table->string('code');
            $table->string('u_price');
            $table->string('t_price');
            $table->date('purchase_date');
            $table->string('transport_cost');
            $table->string('invoice_no');
            $table->string('image');
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
        Schema::dropIfExists('purchases');
    }
}
