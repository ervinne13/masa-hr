<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAccountRolesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_account_roles', function (Blueprint $table) {
            $table->string('user_account_username', 30);
            $table->string('role_code', 30);

            $table->primary(['user_account_username', 'role_code']);

            $table->foreign('user_account_username')
                ->references('username')
                ->on('user_accounts')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('role_code')
                ->references('code')
                ->on('roles')
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
        Schema::dropIfExists('user_account_roles');
    }

}
