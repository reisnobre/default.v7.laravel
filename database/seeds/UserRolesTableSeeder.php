<?php

use App\UserRole;
use Illuminate\Database\Seeder;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = new UserRole();
        $admin->name = 'admin';
        $admin->save();

        $developer = new UserRole();
        $developer->name = 'user';
        $developer->save();
    }
}
