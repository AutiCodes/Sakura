<?php

namespace Modules\News\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NewsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('sk_articles')->insert([
        'author_id' => 1,
        'category_1' => 1,
        'publish_date' => fake()->dateTime(),
        'title' => fake()->title(),
        'content' => fake()->sentence(400),
        'slug' => fake()->slug(),
        'status' => 'Gepubliceerd'
      ]);
    }
}
