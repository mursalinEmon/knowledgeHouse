<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('products')){
            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('author_ name');
                $table->mediumText('book_description');
                $table->mediumText('book_review')->nullable();
                $table->unsignedBigInteger('category_id');
                $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
                $table->unsignedBigInteger('sub_category_id');
                $table->foreign('sub_category_id')->references('id')->on('sub_categories')->onDelete('cascade');
                $table->unsignedBigInteger('book_stock');
                $table->double('book_rating');
                $table->json('book_pictures')->nullable();
                $table->string('book_tags')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
