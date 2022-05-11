<?php

use App\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i++){

            $newpost = new Post();

            $newpost->title = $faker->words(8, true);
            $newpost->slug = Str::slug($newpost->title);
            $newpost->content = $faker->paragraphs(10, true);
            $newpost->published_at = $faker->randomElement([null, $faker->dateTimeBetween('-2 year', '+ 1 year')]);

            $newpost->save();
        }
    }
}
