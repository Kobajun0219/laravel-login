<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory()->count(20)->create();
    }
}
