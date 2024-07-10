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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('buyer_id'); // Adding buyer_id
            $table->foreign('buyer_id')->references('id')->on('buyers')->onDelete('cascade');
            $table->string('contact_name', 255)->nullable();
            $table->mediumText('gst_number')->nullable();
            $table->mediumText('pan_number')->nullable();
            $table->mediumText('company_name')->nullable();
            $table->string('location', 191)->nullable();
            $table->string('contact_number', 20)->nullable();
            $table->string('state', 191)->nullable();
            $table->string('city', 191)->nullable();
            $table->string('landmark', 191)->nullable();
            $table->string('pincode', 10)->nullable();
            $table->integer('address_type')->default(1);
            $table->enum('is_same', ['0', '1'])->default('0');
            $table->integer('primary_status')->default(0);
            $table->timestamps();

            // Adding the foreign key constraint
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
};
