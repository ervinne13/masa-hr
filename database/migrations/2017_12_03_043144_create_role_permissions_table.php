<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolePermissionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_permissions', function (Blueprint $table) {
            $table->string('role_code', 30);
            $table->string('module_code', 30);
            $table->string('permission_code', 30);
            $table->timestamps();

            $table->primary(['role_code', 'module_code', 'permission_code'], 'role_permission_id');

            $table->foreign('role_code')
                ->references('code')
                ->on('roles')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign(['module_code', 'permission_code'])
                ->references(['module_code', 'code'])
                ->on('module_permissions')
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
        Schema::dropIfExists('role_permissions');
    }

}
