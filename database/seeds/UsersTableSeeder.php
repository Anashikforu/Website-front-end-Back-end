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
        //
        DB::table('users')->truncate();

        DB::table('users')->insert([
            'name' => 'Ashik Khan',
            'email' => 'admin@example.com',
            'password' => Hash::make('123456789'),
        ]);
    }
}
