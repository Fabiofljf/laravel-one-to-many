<?php

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = config('db.posts');


        foreach ($posts as $post) {
            $new_post = new Post();
            $new_post->title = $post['title'];
            $new_post->slug = Str::slug($new_post->title, '-');
            $new_post->thumb = $post['thumb'];
            $new_post->description = $post['description'];
            $new_post->save();
        }
    }
}
