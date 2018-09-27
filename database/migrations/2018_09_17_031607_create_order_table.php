<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shipping_id')->unsigned();
            $table->foreign('shipping_id')->references('id')->on('shipping')->onDelete('cascade');
            $table->string('nama_rek');
            $table->date('tgl_pay');
            $table->string('bank');
            $table->string('bukti');
            $table->boolean('status_bayar');
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
        Schema::dropIfExists('order');
    }
}
