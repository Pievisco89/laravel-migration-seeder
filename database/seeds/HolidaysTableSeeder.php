<?php

use App\Holiday;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i=0; $i < 30; $i++) { 
            $new_holiday = new Holiday();
            $new_holiday->reference = $faker->bothify('?????-########');
            $new_holiday->place = $faker->city();
            $new_holiday->state = $faker->state();
            $new_holiday->price = $faker->randomFloat(2, 300, 9000); 
            $new_holiday->duration = $faker->numberBetween(2, 60);
            $new_holiday->date_start = $faker->date();
            $new_holiday->type = $this->typeRandom();
            $new_holiday->service = $faker->text(10);
            $new_holiday->description = $faker->text(250);
            $new_holiday->save();
        }

    }

    private function typeRandom(){
        $arr = ['hotel','boat','apartment','touristic village
        ','farmhouse'];
        shuffle($arr);
        return $arr[0];
    }
}
