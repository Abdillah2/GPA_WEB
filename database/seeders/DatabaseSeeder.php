<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

            User::create([
                'name' => 'Didi Siswandi',
                'username'=>'didisiswandi',
                'email' => 'didisiswandi@gmail.com',
                'password' => bcrypt('12345')
            ]);
            // User::create([
            //     'name' => 'Abdul Rachim',
            //     'email' => 'dul@gmail.com',
            //     'password' => bcrypt('123454')
            // ]);
            // User::create([
            //     'name' => 'Rifai',
            //     'email' => 'rifai@gmail.com',
            //     'password' => bcrypt('123345')
            // ]);

            // News::create([
            //     'title' => 'Judul Pertama',
            //     'slug' => 'judul-pertama',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur  sss adipisicing elit.',
            //     'body' => '<p>Lorem ipsum dolor sit amet consectetur  ass adipisicing elit. Itaque laboriosam, ducimus sunt natus sapiente consequatur odit ratione aspernatur placeat corrupti quia! Laborum aliquam labore ducimus accusamus quidem, doloremque, aperiam temporibus, ratione dolore atque aut eveniet sunt rerum reiciendis vel quas?</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum eos dolorem suscipit quis delectus consequuntur?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde odit aspernatur doloribus labore accusamus dicta reiciendis consectetur necessitatibus non veniam?</p>',
            //     'category_id' => 1,
            //     'user_id' => 1
            // ]);
            // News::create([
            //     'title' => 'Judul Kedua',
            //     'slug' => 'judul-kedua',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque laboriosam,',
            //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque laboriosam, ducimus sunt natus sapiente consequatur odit ratione aspernatur placeat corrupti quia! Laborum aliquam labore ducimus accusamus quidem, doloremque, aperiam temporibus, ratione dolore atque aut eveniet sunt rerum reiciendis vel quas?</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum eos dolorem suscipit quis delectus consequuntur?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde odit aspernatur doloribus labore accusamus dicta reiciendis consectetur necessitatibus non veniam?</p>',
            //     'category_id' => 1,
            //     'user_id' => 1
            // ]);
            // News::create([
            //     'title' => 'Judul Ketiga',
            //     'slug' => 'judul-ketiga',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque dolores officia fugit amet molestias atque tenetur numquam fugiat laboriosam neque velit alias voluptatem ducimus nihil doloremque est excepturi at blanditiis maiores, totam vel facilis impedit accusamus? Nulla neque facilis sunt?</p>',
            //     'category_id' => 2,
            //     'user_id' => 1
            // ]);
            // News::create([
            //     'title' => 'Judul Keempat',
            //     'slug' => 'judul-keempat',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque dolores officia fugit amet molestias atque tenetur numquam fugiat laboriosam neque velit alias voluptatem ducimus nihil doloremque est excepturi at blanditiis maiores, totam vel facilis impedit accusamus? Nulla neque facilis sunt?</p>',
            //     'category_id' => 3,
            //     'user_id' => 1
            // ]);
            // News::create([
            //     'title' => 'Judul Kelima',
            //     'slug' => 'judul-kelima',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque dolores officia fugit amet molestias atque tenetur numquam fugiat laboriosam neque velit alias voluptatem ducimus nihil doloremque est excepturi at blanditiis maiores, totam vel facilis impedit accusamus? Nulla neque facilis sunt?</p>',
            //     'category_id' => 2,
            //     'user_id' => 2
            // ]);
            // News::create([
            //     'title' => 'Judul Keenam',
            //     'slug' => 'judul-keenam',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque dolores officia fugit amet molestias atque tenetur numquam fugiat laboriosam neque velit alias voluptatem ducimus nihil doloremque est excepturi at blanditiis maiores, totam vel facilis impedit accusamus? Nulla neque facilis sunt?</p>',
            //     'category_id' => 2,
            //     'user_id' => 3
            // ]);
            User::factory(5)->create();

            Category::create([
                'name' => 'Programming',
                'slug' => 'programming'
            ]);

            Category::create([
                'name' => 'Telecommunication',
                'slug' => 'telecommunication'
            ]);

            Category::create([
                'name' => 'Contractor',
                'slug' => 'contractor'
            ]);

            News::factory(20)->create();

    }
}