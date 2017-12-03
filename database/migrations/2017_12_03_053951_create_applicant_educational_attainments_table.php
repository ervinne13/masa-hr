<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantEducationalAttainmentsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_educational_attainments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('applicant_id')->unsigned();
            $table->string('level', 30);
            $table->string('school_name', 100);
            $table->string('degree_course', 100);
            $table->integer('year_graduated')->nullable();
            $table->integer('highest_level_or_units')->nullable();
            $table->date('attended_from');
            $table->date('attended_to');
            $table->string('scholarships_or_academic_honors');
            $table->timestamps();

            $table->foreign('applicant_id')
                ->references('id')
                ->on('applicants')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicant_educational_attainments');
    }

}
