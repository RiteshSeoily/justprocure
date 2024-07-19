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
        Schema::create('tbl_brands', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cat_id')->index();
            $table->foreign('cat_id')->references('id')->on('tbl_categories')->onDelete('restrict');
            $table->unsignedBigInteger('buyer_id'); // Adding buyer_id
            $table->foreign('buyer_id')->references('id')->on('buyers')->onDelete('restrict');
            $table->unsignedBigInteger('sub_cat_id')->index();
            $table->foreign('sub-cat_id')->references('id')->on('tbl_sub_categories')->onDelete('restrict');
            $table->string('brand_name');
            $table->integer('is_top')->default(0)->comment('1=>top_brand,0=>no_top_brand');
            $table->string('tbl_image')->nullable();
            $table->timestamps(6);
            $table->integer('status')->default(1);
            $table->integer('is_approved')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_brands');
    }
};
