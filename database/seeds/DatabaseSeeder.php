<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,10) as $index) {
	        DB::table('books')->insert([
                'user_id' => $faker->randomDigit,
                'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'description' => $faker->text($maxNbChars = 200) ,
                'author' => $faker->name,
                'genre' => $faker->word,
	        ]);
	}
        // DB::table('books')->insert([
        //     'user_id' => Str::random(1),
        //     'title' => Str::random(10),
        //     'description' => Str::random(100),
        //     'author' => Str::random(10),
        //     'genre' => Str::random(10),
        // ]);
    }
}
