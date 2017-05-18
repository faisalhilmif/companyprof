<?php

use Illuminate\Database\Seeder;

class PortfolioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 4;

        for ($i=0; $i<$limit; $i++){
        	DB::table('portfolios')->insert([
        		'title' => $faker->word,
        		'description' => $faker->sentence($nbWords = 3),
        		'image' => $faker->image($dir = '/tmp', $width = 640, $height = 480)]);
        }
    }
}
