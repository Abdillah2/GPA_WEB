<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**

     */
    public function run()
    {
        // DB::table('news')->insert([
        //     'title' => fake()->title(),
        //     'description' => fake()->paragraph(2, true),
        //     'category' => fake()->sentence(),
        //     'author' => fake()->email(),
        // ]);
    }
}