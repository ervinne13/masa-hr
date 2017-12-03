<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantChildrenTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_children', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('applicant_id')->unsigned();
            $table->string('name', 100);
            $table->date('birth_date');
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
        Schema::dropIfExists('applicant_children');
    }

}
