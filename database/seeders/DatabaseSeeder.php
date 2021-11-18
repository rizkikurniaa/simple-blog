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
        

        // User::create([
        //     'name' => 'Rizki Kurniawan',
        //     'email' => 'rizki@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Sulistya Ningrum',
        //     'email' => 'sulis@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque sed recusandae mollitia corporis modi unde hic assumenda distinctio reiciendis temporibus eligendi nam beatae, magnam vero ex',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque sed recusandae mollitia corporis modi unde hic assumenda distinctio reiciendis temporibus eligendi nam beatae, magnam vero ex. Iusto exercitationem perspiciatis provident eveniet dignissimos at magni doloremque temporibus, ratione explicabo nesciunt repudiandae fuga ad pariatur architecto, recusandae deleniti quas ab quo, velit voluptate soluta harum officia?</p><p> Aspernatur nobis, ipsam facilis sapiente tenetur similique! Maxime dolorum ipsa fugit dicta sit aut esse natus architecto in, hic reiciendis dolor aperiam a, quisquam nemo distinctio earum repellat voluptatum iusto soluta tempore veniam! Laboriosam, cupiditate eos. Earum cupiditate maiores blanditiis natus dolor possimus optio tenetur necessitatibus.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque sed recusandae mollitia corporis modi unde hic assumenda distinctio reiciendis temporibus eligendi nam beatae, magnam vero ex',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque sed recusandae mollitia corporis modi unde hic assumenda distinctio reiciendis temporibus eligendi nam beatae, magnam vero ex. Iusto exercitationem perspiciatis provident eveniet dignissimos at magni doloremque temporibus, ratione explicabo nesciunt repudiandae fuga ad pariatur architecto, recusandae deleniti quas ab quo, velit voluptate soluta harum officia?</p><p> Aspernatur nobis, ipsam facilis sapiente tenetur similique! Maxime dolorum ipsa fugit dicta sit aut esse natus architecto in, hic reiciendis dolor aperiam a, quisquam nemo distinctio earum repellat voluptatum iusto soluta tempore veniam! Laboriosam, cupiditate eos. Earum cupiditate maiores blanditiis natus dolor possimus optio tenetur necessitatibus.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque sed recusandae mollitia corporis modi unde hic assumenda distinctio reiciendis temporibus eligendi nam beatae, magnam vero ex',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque sed recusandae mollitia corporis modi unde hic assumenda distinctio reiciendis temporibus eligendi nam beatae, magnam vero ex. Iusto exercitationem perspiciatis provident eveniet dignissimos at magni doloremque temporibus, ratione explicabo nesciunt repudiandae fuga ad pariatur architecto, recusandae deleniti quas ab quo, velit voluptate soluta harum officia?</p><p> Aspernatur nobis, ipsam facilis sapiente tenetur similique! Maxime dolorum ipsa fugit dicta sit aut esse natus architecto in, hic reiciendis dolor aperiam a, quisquam nemo distinctio earum repellat voluptatum iusto soluta tempore veniam! Laboriosam, cupiditate eos. Earum cupiditate maiores blanditiis natus dolor possimus optio tenetur necessitatibus.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque sed recusandae mollitia corporis modi unde hic assumenda distinctio reiciendis temporibus eligendi nam beatae, magnam vero ex',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque sed recusandae mollitia corporis modi unde hic assumenda distinctio reiciendis temporibus eligendi nam beatae, magnam vero ex. Iusto exercitationem perspiciatis provident eveniet dignissimos at magni doloremque temporibus, ratione explicabo nesciunt repudiandae fuga ad pariatur architecto, recusandae deleniti quas ab quo, velit voluptate soluta harum officia?</p><p> Aspernatur nobis, ipsam facilis sapiente tenetur similique! Maxime dolorum ipsa fugit dicta sit aut esse natus architecto in, hic reiciendis dolor aperiam a, quisquam nemo distinctio earum repellat voluptatum iusto soluta tempore veniam! Laboriosam, cupiditate eos. Earum cupiditate maiores blanditiis natus dolor possimus optio tenetur necessitatibus.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
