<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantParentsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_parents', function (Blueprint $table) {
            $table->integer('applicant_id')->unsigned();
            $table->string('mother_maiden_name', 100);
            $table->string('mother_last_name', 30);
            $table->string('mother_first_name', 30);
            $table->string('mother_middle_name', 30)->nullable();

            $table->string('father_last_name', 30);
            $table->string('father_first_name', 30);
            $table->string('father_middle_name', 30)->nullable();
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
        Schema::dropIfExists('applicant_parents');
    }

}
