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
        DB::table('users')->insert([
            'name'      =>  'Shubhu Tech',
            'email'     =>  'shubhutech@gmail.com',
            'password'  =>  bcrypt('shubhutech'),
        ]);
    }
}
