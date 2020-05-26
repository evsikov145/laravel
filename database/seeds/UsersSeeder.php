<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert($this->getData());
    }

    private function getData(){
        $faker = Faker\Factory::create('ru_RU');

        $data = [];
        for($i = 0; $i < 10; $i++){
            $data[] = [
                'email' => $faker->sentence(rand(10, 16)),
                'desc' => $faker->realText(rand(100, 200)),
                'pass' =>  $faker->sentence(rand(6, 10)),
                'img' =>  $faker->sentence(rand(6, 10)),
            ];

        }
        return $data;
    }
}
