<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        App\User::create([
        	'name' => 'Thanh',
        	'email' => 'thanhbuon1910@gmail.com',
        	'password' => bcrypt('thanh19101998')
        ]);
    }
}
