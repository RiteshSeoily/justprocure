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
        Schema::create('tbl_sub_categories', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('cat_id')->index();
            $table->foreign('cat_id')->references('id')->on('tbl_categories')->onDelete('restrict');
            $table->unsignedBigInteger('buyer_id'); 
            $table->foreign('buyer_id')->references('id')->on('buyers')->onDelete('restrict');
            $table->string('sub_category_name', 255)->nullable(); 
            $table->text('sub_cat_slug')->nullable(); 
            $table->string('tbl_image', 255)->nullable(); 
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
        Schema::dropIfExists('tbl_sub_categories');
    }
};
