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
        Schema::create('carts', function (Blueprint $table) {
            $table->id(); // id column (int(11))
            $table->unsignedBigInteger('buyer_id'); // Adding buyer_id
            $table->foreign('buyer_id')->references('id')->on('buyers')->onDelete('cascade');
            $table->longText('uuid')->nullable(); // uuid column (longtext)
            $table->integer('unique_cart_id'); // unique_cart_id column (int(11))
            $table->unsignedBigInteger('product_id')->nullable(); // product_id column (int(11))
            $table->foreign('product_id')->references('id')->on('tbl_products')->onDelete('cascade');
            $table->integer('quantity')->nullable(); // quantity column (int(11))
            $table->integer('price')->nullable(); // price column (int(11))
            $table->string('product_image', 500)->nullable(); // product_image column (varchar(500))
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
        Schema::dropIfExists('carts');
    }
};
