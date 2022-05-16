<?php
use Faker\Generator as Faker;
use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++){
            $newTrain = new Train;
            $newTrain->agency = $faker->word();
            $newTrain->departure_station = $faker->word();
            $newTrain->arrival_station = $faker->word();
            $newTrain->departure_time = $faker->randomFloat(2, 0, 59);
            $newTrain->arrival_time = $faker->randomFloat(2, 0, 59);
            $newTrain->train_code = $faker->randomNumber(5, true);
            $newTrain->number_of_carriages = $faker->randomDigitNotNull();
            $newTrain->in_time = $faker->boolean();
            $newTrain->deleted = $faker->boolean();
            $newTrain->save();
        }
    }
}
