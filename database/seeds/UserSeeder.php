<?php
use\app\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
          'name'  => 'Muhammad Dede Andri',
          'level' => 'Admin',
          'email' => 'admin@gmail.com',
          'password' => bcrypt('admin'),
          'remember_token' => Str_random(60),

        ]);
        
    }
}
