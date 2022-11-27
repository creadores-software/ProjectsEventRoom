<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Presentation;
use App\Models\Keyword;

class PresentationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<35; $i++)
        {
            $users = User::factory()
                ->count(rand(1, 5))
                ->create();

            $keywords = Keyword::all()
                ->random(rand(0, 6));
                
            Presentation::factory()
                ->count(rand(1, 3))
                ->hasAttached($users)
                ->hasAttached($keywords)
                ->create();
        }
    }
}
