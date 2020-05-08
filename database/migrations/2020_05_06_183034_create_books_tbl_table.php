<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books_tbl', function (Blueprint $table) {
            $table->increments('id')->unsigned();;
            $table->string('name')->nullable();
            $table->string('category')->nullable();
            $table->string('author')->nullable();
            $table->string('bookshelf')->nullable();
			$table->string('summary')->nullable();
            $table->string('bookcover')->nullable();
            


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
        Schema::dropIfExists('books_tbl');
    }
}
