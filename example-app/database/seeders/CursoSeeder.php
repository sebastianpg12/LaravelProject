<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curso = new Curso();
        $curso->name = "Laravel";
        $curso->descripcion = "Laravel descripcion";
        $curso->categoria = "web";
        $curso->save();

        $curso = new Curso();
        $curso->name = "vue.js";
        $curso->descripcion = "vue.js descripcion";
        $curso->categoria = "web";
        $curso->save();

        $curso = new Curso();
        $curso->name = "java";
        $curso->descripcion = "java descripcion";
        $curso->categoria = "back";
        $curso->save();
    }
}
