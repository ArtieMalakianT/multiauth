<?php

use Illuminate\Database\Seeder;

class statusMatriculasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_matriculas')->insert([
            'nome' => 'Cursando',                                   
        ]);
        DB::table('status_matriculas')->insert([
            'nome' => 'Formado',                                   
        ]);
        DB::table('status_matriculas')->insert([
            'nome' => 'Cancelado',                                   
        ]);
        DB::table('status_matriculas')->insert([
            'nome' => 'Suspenso',                                   
        ]);
    }
}
