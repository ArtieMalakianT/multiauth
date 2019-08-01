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
        DB::table('admins')->insert([
            'name' => 'Maicon Alex',
            'email' => 'maiconalexdesouza@gmail.com',
            'password' => Hash::make('systemhard2S'),            
        ]);
    }
}
