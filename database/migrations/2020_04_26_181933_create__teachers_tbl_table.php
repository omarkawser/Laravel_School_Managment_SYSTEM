<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Teachers_tbl', function (Blueprint $table) {
           

            $table->bigIncrements('teacher_id');
            $table->string('teacher_name');
            $table->string('teacher_phone');
            $table->string('teacher_address');
            $table->string('teacher_department');
            $table->string('teacher_image');
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
        Schema::dropIfExists('Teachers_tbl');
    }
}
