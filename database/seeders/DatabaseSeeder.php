<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
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
        User::factory(3)->create();
        Post::factory(20)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        User::create([
            'name' => 'Rakhmat Khaidir',
            'username' => 'rakhmat',
            'email' => 'rakhmatkhaidir@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Tony Stark',
        //     'email' => 'tonystark@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);


        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque veritatis pariatur eum? Repellendus quo,',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque veritatis pariatur eum? Repellendus quo, quis beatae perspiciatis reprehenderit deserunt pariatur minus doloribus vero aut. Tempore dignissimos ad culpa.</p> <p>Excepturi optio, consequatur delectus in modi voluptate, laudantium similique eaque animi repellendus harum atque dignissimos facere, blanditiis reiciendis! Temporibus iure deserunt cum voluptas et adipisci reiciendis reprehenderit pariatur laborum minima velit veniam repellendus doloribus eaque vitae voluptatibus omnis iste, quis suscipit exercitationem eligendi. Aliquid quaerat qui repellendus? Suscipit sunt velit tempore numquam cupiditate alias libero mollitia expedita animi! Rerum voluptates iste, voluptas ex vel laborum facere sapiente facilis culpa quia atque dolorem?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque veritatis pariatur eum? Repellendus quo,',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque veritatis pariatur eum? Repellendus quo, quis beatae perspiciatis reprehenderit deserunt pariatur minus doloribus vero aut. Tempore dignissimos ad culpa.</p> <p>Excepturi optio, consequatur delectus in modi voluptate, laudantium similique eaque animi repellendus harum atque dignissimos facere, blanditiis reiciendis! Temporibus iure deserunt cum voluptas et adipisci reiciendis reprehenderit pariatur laborum minima velit veniam repellendus doloribus eaque vitae voluptatibus omnis iste, quis suscipit exercitationem eligendi. Aliquid quaerat qui repellendus? Suscipit sunt velit tempore numquam cupiditate alias libero mollitia expedita animi! Rerum voluptates iste, voluptas ex vel laborum facere sapiente facilis culpa quia atque dolorem?</p>',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque veritatis pariatur eum? Repellendus quo,',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque veritatis pariatur eum? Repellendus quo, quis beatae perspiciatis reprehenderit deserunt pariatur minus doloribus vero aut. Tempore dignissimos ad culpa.</p> <p>Excepturi optio, consequatur delectus in modi voluptate, laudantium similique eaque animi repellendus harum atque dignissimos facere, blanditiis reiciendis! Temporibus iure deserunt cum voluptas et adipisci reiciendis reprehenderit pariatur laborum minima velit veniam repellendus doloribus eaque vitae voluptatibus omnis iste, quis suscipit exercitationem eligendi. Aliquid quaerat qui repellendus? Suscipit sunt velit tempore numquam cupiditate alias libero mollitia expedita animi! Rerum voluptates iste, voluptas ex vel laborum facere sapiente facilis culpa quia atque dolorem?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
