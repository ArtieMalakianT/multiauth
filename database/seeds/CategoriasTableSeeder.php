<?php

use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'name' => 'Idiomas',
            'ordem' => 1,
            'icon' => 'fas fa-comments',                                   
        ]);
        DB::table('categorias')->insert([
            'name' => 'Informática',
            'ordem' => 2,
            'icon' => 'fas fa-code',                                   
        ]);
        DB::table('categorias')->insert([
            'name' => 'Negócios',
            'ordem' => 3,
            'icon' => 'fas fa-briefcase',                                   
        ]);
    }
}
