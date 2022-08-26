<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreatePosts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Post::Create([
        //     'title' => 'Pindah Dalam Kabupaten',
        //     'slug' => 'dikabupaten',
        //     'excerpt' => 'cara pindah di dalam kabupaten sebagai berikut',
        //     'body' => 'cara pindah di dalam kabupaten sebagai berikut, 1 antar OPD dengan syarat melengkapi hal sejenisnya',
        //     'category_id' => 1,
        //     'user_id' => 3
        // ]);

        // Post::Create([
        //     'title' => 'Pengurusan Karpeg',
        //     'slug' => 'kartupegawai',
        //     'excerpt' => 'cara pengurusan karpeg sebagai berikut',
        //     'body' => 'cara pengurusan di dalam kabupaten sebagai berikut, 1 antar OPD dengan syarat melengkapi hal sejenisnya',
        //     'category_id' => 2,
        //     'user_id' => 3
        // ]);

        Post::factory(14)->create();
    }

}
