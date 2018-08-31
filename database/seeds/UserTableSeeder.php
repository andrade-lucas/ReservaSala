<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Users::create([
            'name'  => 'Admin',
            'email' => 'admin@admin.com',
            'password'  => bcrypt('admin123') 
        ]);
    }
}
