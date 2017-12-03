<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantSpouseTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_spouse', function (Blueprint $table) {
            $table->integer('applicant_id')->unsigned();
            $table->string('last_name', 30);
            $table->string('first_name', 30);
            $table->string('middle_name', 30);
            $table->string('occupation', 100);
            $table->string('employer_or_business_name', 100);
            $table->text('business_address')->nullable();
            $table->string('telephone_no');
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
        Schema::dropIfExists('applicant_spouse');
    }

}
