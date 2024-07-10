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
        Schema::create('list_rfqs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('buyer_id'); // Adding buyer_id
            $table->string('rfq_number')->nullable();
            $table->integer('type_a')->nullable()->comment('selected product from website');
            $table->integer('type_b')->comment('upload csv');
            $table->integer('type_c')->nullable()->comment('cannot find products');
            $table->longText('type_a_ids')->nullable();
            $table->longText('type_b_ids')->nullable();
            $table->longText('type_c_ids')->nullable();
            $table->integer('is_deleted')->default(0);
            $table->integer('delete_count')->default(0);
            $table->integer('is_modified')->default(0);
            $table->timestamps();
            $table->foreign('buyer_id')->references('id')->on('buyers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_rfqs');
    }
};
