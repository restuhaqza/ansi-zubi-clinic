<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('patients')->insert([
            'patient_name' => 'Restu Haqqi Muzakir',
            'address' => 'Siak Sri Indrapura',
            'identity_id' => '2121050599',
            'birth_date' => '1999-05-05',
            'email' => 'hi@restuhaqza.com',
            'password' => bcrypt('SiapSiaga')
        ]);
    }
}
