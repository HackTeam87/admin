<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::insert('INSERT INTO `posts`(`title`,`text`) VALUES (?,?)',
//            [
//                'Blog post',
//                'Article TextArticle TextArticle TextArticle TextArticle Text'
//            ]);

        Post::create(
            [
                'title' => 'Blog Post',
                'text' => 'Article Text Article Text Article Text'
            ]);


    }
}
