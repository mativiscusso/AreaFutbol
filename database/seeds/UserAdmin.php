<?php

use Illuminate\Database\Seeder;

class UserAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'administrador',
            'email' => 'administrador@admin.com',
            'edad' => '18',
            'role' => 'admin',
            'password' => bcrypt('admin1234')
        ]);
    }
}
