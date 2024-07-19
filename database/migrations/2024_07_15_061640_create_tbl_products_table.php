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
        Schema::create('tbl_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('buyer_id')->nullable(); // buyer_id column (int(11))
            $table->foreign('buyer_id')->references('id')->on('buyers')->onDelete('cascade');
            $table->unsignedBigInteger('cat_id')->nullable(); // cat_id column (int(11))
            $table->foreign('cat_id')->references('id')->on('tbl-categories')->onDelete('cascade');
            $table->unsignedBigInteger('sub_cat_id')->nullable(); // sub_cat_id column (int(11))
            $table->foreign('sub_cat_id')->references('id')->on('tbl_sub_categories')->onDelete('cascade');
            $table->unsignedBigInteger('brand_id')->nullable(); // brand_id column (int(11))
            $table->foreign('brand_id')->references('id')->on('tbl_brands')->onDelete('cascade');
            $table->string('product_name', 255); // product_name column (varchar(255))
            $table->string('material_code', 191)->nullable(); // material_code column (varchar(191))
            $table->string('hsn', 191)->nullable(); // hsn column (varchar(191))
            $table->string('gst', 191)->nullable(); // gst column (varchar(191))
            $table->string('measurement_unit', 191)->nullable(); // measurement_unit column (varchar(191))
            $table->string('tbl_product_slug', 255); // tbl_product_slug column (varchar(255))
            $table->text('tbl_short_description')->nullable(); // tbl_short_description column (text)
            $table->text('tbl_full_description')->nullable(); // tbl_full_description column (text)
            $table->string('tbl_image', 255)->nullable(); // tbl_image column (varchar(255))
            $table->integer('top_deal')->default(0); // top_deal column (int(11))
            $table->integer('status')->default(0); // status column (int(11))
            $table->integer('is_approved')->default(1); // is_approved column (int(11))
            $table->string('merge_id', 191)->default('NA'); // merge_id column (varchar(191))
            $table->longText('meta_title')->nullable(); // meta_title column (longtext)
            $table->longText('meta_keyword')->nullable(); // meta_keyword column (longtext)
            $table->longText('meta_description')->nullable(); // meta_description column (longtext)
            $table->timestamp('created_at', 6)->nullable()->default(DB::raw('current_timestamp(6)')); // created_at column (timestamp(6))
            $table->dateTime('updated_at', 6)->nullable()->default(DB::raw('current_timestamp(6)')); // updated_at column (datetime(6))
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_products');
    }
};
