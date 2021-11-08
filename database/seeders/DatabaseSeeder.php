<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        User::truncate();
        Post::truncate();
        Category::truncate();

         $user = User::factory()->create();

         $personal = Category::create([
             'name' => 'Personal',
             'slug' => 'personal'
         ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ligula libero, pulvinar ut dui id, lobortis viverra nunc. Praesent mollis lacus ut elit tincidunt viverra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus convallis iaculis ultricies. Etiam vitae nibh ut purus condimentum rhoncus ac a diam. Morbi ipsum erat, varius sit amet mauris vitae, commodo molestie nibh. Pellentesque aliquet, ante sit amet mattis vestibulum, felis ligula commodo dui, vel vulputate ante felis non ligula.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ligula libero, pulvinar ut dui id, lobortis viverra nunc. Praesent mollis lacus ut elit tincidunt viverra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus convallis iaculis ultricies. Etiam vitae nibh ut purus condimentum rhoncus ac a diam. Morbi ipsum erat, varius sit amet mauris vitae, commodo molestie nibh. Pellentesque aliquet, ante sit amet mattis vestibulum, felis ligula commodo dui, vel vulputate ante felis non ligula.</p>'
        ]);
    }
}
