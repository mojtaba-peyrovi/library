<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_books', function (Blueprint $table) {
          $table->integer('category_id')->unsigned()->nullable();
          $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
          $table->integer('book_id')->unsigned()->unllable();
          $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');

          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_books');
    }
}
