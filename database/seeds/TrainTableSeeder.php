<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) {
            $newTrain = new Train();

            $newTrain->azienda = $faker->company();

            $newTrain->giorno_di_partenza = $faker->date();

            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();

            $newTrain->orario_di_partenza = $faker->time();
            $newTrain->orario_di_arrivo = $faker->time();

            $newTrain->codice_treno = $faker->bothify("??####");

            $newTrain->numero_carrozze = $faker->randomNumber(1);

            $newTrain->in_orario =  $faker->boolean();
            $newTrain->cancellato =  $faker->boolean();

            $newTrain->save();
        }
    }
}
