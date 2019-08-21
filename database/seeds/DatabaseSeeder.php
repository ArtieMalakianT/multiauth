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
        DB::table('categorias')->insert([
            'nome' => 'Idiomas',
            'ordem' => 1,
            'icon' => 'fas fa-comments',                                   
        ]);
        DB::table('categorias')->insert([
            'nome' => 'Informática',
            'ordem' => 2,
            'icon' => 'fas fa-code',                                   
        ]);
        DB::table('categorias')->insert([
            'nome' => 'Negócios',
            'ordem' => 3,
            'icon' => 'fas fa-briefcase',                                   
        ]);
        DB::table('cores')->insert([
            'nome' => 'blue',                                   
        ]);
        DB::table('cores')->insert([
            'nome' => 'red',                                   
        ]);
        DB::table('cores')->insert([
            'nome' => 'green',                                   
        ]);        
    }
}
