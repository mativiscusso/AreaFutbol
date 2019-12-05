<?php

use Illuminate\Database\Seeder;

use App\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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
        factory(Post::class, 10)->create();
    }
}
