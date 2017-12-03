<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status', 30);
            $table->string('last_name', 30);
            $table->string('first_name', 30);
            $table->string('middle_name', 30);
            $table->string('name_extension', 4);
            $table->date('birth_date')->nullable();
            $table->string('sex', 1);
            $table->string('civil_status', 100);
            $table->string('citizenship', 100);
            $table->float('height_in_meters');
            $table->float('weight_in_kilograms');
            $table->string('pagibig_id_no', 100)->nullable();
            $table->string('philhealth_no', 100)->nullable();
            $table->string('sss_no', 100);
            $table->text('residential_address');
            $table->string('zip_code', 4)->nullable();
            $table->string('residential_telephone_no', 10)->nullable();
            $table->text('permanent_address');
            $table->string('permanent_telephone_no', 10)->nullable();
            $table->string('email_address', 30)->nullable();
            $table->string('cellphone_no', 15)->nullable();
            $table->string('tin_no', 30)->nullable();
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
        Schema::dropIfExists('applicants');
    }

}
