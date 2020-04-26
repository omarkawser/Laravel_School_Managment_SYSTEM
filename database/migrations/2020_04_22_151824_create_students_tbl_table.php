<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_tbl', function (Blueprint $table) {
            $table->bigIncrements('student_id');
            $table->string('student_name');
            $table->string('student_roll');
            $table->string('student_fathername');
            $table->string('student_mothername');
            $table->string('student_email');
            $table->string('student_address');
            $table->string('student_image')->nullable();
            $table->string('student_password');
            $table->string('student_department');
            $table->string('student_admission_year');
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
        Schema::dropIfExists('students_tbl');
    }
}
