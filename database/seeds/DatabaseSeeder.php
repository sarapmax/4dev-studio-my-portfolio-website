<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        App\Admin::create([
        	'email' => 'teerpong00@hotmail.com',
        	'name' => 'Teerpong Phothiphun',
        	'password' => bcrypt('035505791aA'),
        ]);
    }
}
