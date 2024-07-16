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
        Schema::create('tbl_product_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->nullable(); // product_id column (int(11))
            $table->foreign('product_id')->references('id')->on('tbl_products')->onDelete('cascade');
            $table->unsignedInteger('tbl_mrp')->nullable();
            $table->unsignedInteger('tbl_selling_price')->nullable();
            $table->unsignedInteger('tbl_quantity')->nullable();
            $table->unsignedInteger('min_quantity')->nullable();
            $table->unsignedInteger('tbl_product_code')->nullable();
            $table->timestamps(6);
            $table->integer('status')->default(1);
  
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_product_details');
    }
};
