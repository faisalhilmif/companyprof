<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
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
        	DB::table('blogs')->insert([
        		'title' => $faker->sentence($nbWords = 6),
        		'description' => $faker->text,
        		'author' => $faker->name,
        		'tag' => $faker->numberBetween($min = 1, $max = 4),]);
        }
    }
}
