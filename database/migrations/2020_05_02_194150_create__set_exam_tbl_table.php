<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetExamTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SetExamTbl', function (Blueprint $table) {
            $table->bigIncrements('exam_id');
            $table->string('exam_name');
            $table->string('exam_type');
            $table->string('exam_date');
            $table->string('exam_session');
            $table->string('exam_section');
            $table->string('exam_subject');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SetExamTbl');
    }
}
