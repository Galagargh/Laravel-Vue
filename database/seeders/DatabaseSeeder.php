<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Dealership;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

//        Car::factory(5)->create([
//        ]);

        Dealership::factory(6)->create();
//        ]);

        Car::create([
            'dealership_id' => '1',
            'brand' => 'Ford',
            'model' => 'Model A',
            'description' => 'The very first Ford',
            'slug' => 'model-a'
        ]);

        Car::create([
            'dealership_id' => '2',
            'brand' => 'Hyundai',
            'model' => 'i30',
            'description' => 'A fast affordable hatchback',
            'slug' => 'i30'
        ]);

        Car::create([
            'dealership_id' => '3',
            'brand' => 'Toyota',
            'model' => 'Prius',
            'description' => 'A fast affordable hatchback',
            'slug' => 'prius'
        ]);

        Car::create([
            'dealership_id' => '4',
            'brand' => 'Mitsubushi',
            'model' => 'Lancer Evo X',
            'description' => 'A great Japanese sports car',
            'slug' => 'lancer-evo'
        ]);

        Car::create([
            'dealership_id' => '5',
            'brand' => 'Lancia',
            'model' => 'Delta Intergrale',
            'description' => 'The best',
            'slug' => 'delta-intergrale'
        ]);

        Car::create([
            'dealership_id' => '6',
            'brand' => 'Lancia',
            'model' => 'Stratos',
            'description' => 'Even better',
            'slug' => 'stratos'
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
