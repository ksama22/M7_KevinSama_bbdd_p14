<?php
namespace Database\Factories;

use App\Models\Animal;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class AnimalFactory extends Factory
{
    protected $model = Animal::class;
    public function definition()
    {        
        // Creamos una instancia de Faker para generar valores aleatorios
        $faker = Faker::create();
        return [
            'name' => $faker->unique()->text(50), // texto único 
            'image' => $faker->unique()->text(50), // texto único 
            'day' => $faker->numberBetween(1,28), // número aleatorio entre 1 y 28 para el día
            'month' => $faker->numberBetween(1,12), // número aleatorio entre 1 y 12 para el mes
            'description' => $faker->optional()->paragraph(4) // párrafo aleatorio para la descripción, que puede ser nula
       ];
    }
}
