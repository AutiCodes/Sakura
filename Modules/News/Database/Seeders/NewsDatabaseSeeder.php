<?php

namespace Modules\News\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Modules\News\Entities\Category;
use Modules\News\Entities\Article;

class NewsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Category::create([
        'name' => fake()->name(),
        'slug' => fake()->slug() 
      ]);
      
      Article::create([
        'author_id' => 1,
        'publish_date' => fake()->dateTime(),
        'title' => fake()->title(),
        'content' => fake()->sentence(),
        'slug' => fake()->slug(),
        'status' => 1
      ]);


    }
}
