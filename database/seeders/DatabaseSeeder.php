<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   /**
    * Seed the application's database.
    *
    * @return void
    */
   public function run()
   {
      $this->call([
         CreateUsersSeeder::class,
         CreateCategories::class,
         CreatePosts::class,
      ]);

      // Post::factory(19)->create();
   } 
}
