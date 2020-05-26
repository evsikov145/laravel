<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($this->getData());
    }

    private function getData(){
        $faker = Faker\Factory::create('ru_RU');

        $data = [];
        for($i = 0; $i < 10; $i++){
            $data[] = [
                'title' => $faker->sentence(rand(3, 10))
            ];

        }
        return $data;
    }
}
