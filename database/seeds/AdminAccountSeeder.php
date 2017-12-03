<?php

use App\Models\UserAccount;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminAccountSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin               = new UserAccount();
        $admin->username     = 'admin';
        $admin->display_name = 'Administrator';
        $admin->password     = Hash::make('secret');
        $admin->save();
    }

}
