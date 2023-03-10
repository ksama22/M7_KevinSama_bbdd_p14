<?php
namespace Database\Seeders;
use App\Models\Animal;
use Illuminate\Database\Seeder;
class AnimalsTableSeeder extends Seeder
{
    public function run()
    {
        //Cridem al Animal de /Models/Animals
        Animal::factory()->count(50)->create();
    }
}
