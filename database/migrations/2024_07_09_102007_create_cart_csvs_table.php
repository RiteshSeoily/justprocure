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
        Schema::create('cart_csvs', function (Blueprint $table) {
            $table->id(); // id column (int(11))
            $table->unsignedBigInteger('cart_id')->nullable(); // cart_id column (int(11))
            $table->foreign('cart_id')->references('id')->on('carts')->onDelete('cascade');
            $table->unsignedBigInteger('buyer_id'); // Adding buyer_id
            $table->foreign('buyer_id')->references('id')->on('buyers')->onDelete('cascade');
            $table->unsignedBigInteger('rfq_id');
            $table->foreign('rfq_id')->references('id')->on('list_rfqs')->onDelete('cascade');
            $table->longText('file')->nullable(); // file column (longtext)
            $table->string('date_of_delivery', 155)->nullable(); // date_of_delivery column (varchar(155))
            $table->timestamps(); // created_at and updated_at columns (timestamp)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_csvs');
    }
};
