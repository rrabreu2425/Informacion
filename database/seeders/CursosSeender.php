<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\curso;
class CursosSeender extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curso= new Curso();
        $curso->name='java';
        $curso->description='El primer lenguaje';
        $curso->save();
    }
}
