<?php

use App\Models\Security\AccessControl;
use Illuminate\Database\Seeder;

class AccessControlsSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AccessControl::insert([
            ['level' => 1, 'display_name' => 'Viewer'],
            ['level' => 2, 'display_name' => 'Author'],
            ['level' => 3, 'display_name' => 'Manager'],
        ]);
    }

}
