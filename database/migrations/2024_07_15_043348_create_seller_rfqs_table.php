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
        Schema::create('seller_rfqs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rfq_id');
            $table->foreign('rfq_id')->references('id')->on('list_rfqs')->onDelete('cascade');
            $table->unsignedBigInteger('seller_id');
            $table->foreign('seller_id')->references('id')->on('sellers')->onDelete('cascade');
            $table->unsignedBigInteger('product_id')->nullable(); // product_id column (int(11))
            $table->foreign('product_id')->references('id')->on('tbl_products')->onDelete('cascade');
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
        Schema::dropIfExists('seller_rfqs');
    }
};
