<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;
class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
       for ($i=0; $i < 100; $i++) {
        $trains= new Train();
         $trains->Azienda= $faker->words(1,true);
         $trains->Stazione_di_partenza= $faker->words(3,true);
         $trains->Stazione_di_arrivo= $faker->words(3,true);
          $trains->Data_di_partenza= $faker->date();
          $trains->Orario_di_partenza=$faker->time();
          $trains->Data_di_arrivo= $faker->date();
          $trains->Orario_di_arrivo=$faker->time();
          $trains->Numero_Carrozze=$faker->randomDigit();
          $trains->In_orario= $faker->words(1,true);
          $trains->Cancellato= $faker->words(1,true);
          $trains->save();
       }
    }
}
