<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassRoomsTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classRoomsTbl', function (Blueprint $table) {
            $table->bigIncrements('classroom_id');
            $table->string('classroom_name');
            $table->integer('classroom_code');
            $table->text('class_description');
            $table->tinyinteger('classroom_status')->default(1);
            $table->softDeletes();
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
        Schema::dropIfExists('classRoomsTbl');
    }
}
