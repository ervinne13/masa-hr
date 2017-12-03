<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessControlListTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('access_control_list', function (Blueprint $table) {
            $table->string('role_code', 30);
            $table->string('module_code', 30);
            $table->integer('access_control_level')->unsigned();
            $table->timestamps();

            $table->primary(['role_code', 'module_code', 'access_control_level'], 'access_control_list_id');

            $table->foreign('role_code')
                ->references('code')
                ->on('roles')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('module_code')
                ->references('code')
                ->on('modules')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('access_control_level')
                ->references('level')
                ->on('access_controls')
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
        Schema::dropIfExists('access_control_list');
    }

}
