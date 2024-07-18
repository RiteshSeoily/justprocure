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
        Schema::create('tbl_categories', function (Blueprint $table) {
            $table->id();
            $table->string('category_name');
            $table->text('category_slug');
            $table->string('tbl_image')->nullable();
            $table->unsignedBigInteger('buyer_id'); // Adding buyer_id
            $table->foreign('buyer_id')->references('id')->on('buyers')->onDelete('restrict');
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
        Schema::dropIfExists('tbl_categories');
    }
};
