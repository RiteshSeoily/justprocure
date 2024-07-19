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
        Schema::create('tbl_sub_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cat_id')->nullable(); 
            $table->unsignedBigInteger('sub_cat_id')->nullable(); 
            $table->unsignedBigInteger('buyer_id')->nullable(); 
            $table->string('category_name', 255)->nullable();
            $table->text('category_slug')->nullable(); 
            $table->string('tbl_image', 255)->nullable(); 
            $table->timestamps(); 
            $table->integer('status')->default(1); 
            $table->integer('is_approved')->default(1); 

        
            $table->foreign('cat_id')->references('id')->on('tbl_categories')->onDelete('set null');
            $table->foreign('sub_cat_id')->references('id')->on('tbl_sub_categories')->onDelete('set null');
            $table->foreign('buyer_id')->references('id')->on('buyers')->onDelete('set null');
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('tbl_sub_sub_categories');
    }
};
