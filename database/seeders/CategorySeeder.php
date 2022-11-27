<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'General']);
        Category::create(['name' => 'Administración de Empresas']);
        Category::create(['name' => 'Artes Culinarias y Gastronomía']);
        Category::create(['name' => 'Ciencia Política, Gobierno y Relaciones Internacionales']);
        Category::create(['name' => 'Diseño de Modas']);
        Category::create(['name' => 'Diseño Industrial']);
        Category::create(['name' => 'Economía']);
        Category::create(['name' => 'Fisioterapia']);
        Category::create(['name' => 'Ingeniería Biomédica']);
        Category::create(['name' => 'Ingeniería de Sistemas']);
        Category::create(['name' => 'Ingeniería Electrónica']);
        Category::create(['name' => 'Ingeniería Industrial']);
        Category::create(['name' => 'Ingeniería Mecánica']);
        Category::create(['name' => 'Negocios Internacionales']);
        Category::create(['name' => 'Odontología']);
    }
}