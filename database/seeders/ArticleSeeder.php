<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Writer;
use App\Models\Article;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create("id_ID");

        // Fetch all writers
        $writers = Writer::all();

        // Define an array of articles
        $arrayOfArticle = [
            [
                "title" => "Machine Learning",
                "body" => $faker->paragraph,
                "photo_url" => "firstBlog.png",
                "category" => "Data Science",
                "writer_id" => $writers->random()->id,
            ],
            [
                "title" => "Deep Learning",
                "body" => $faker->paragraph,
                "photo_url" => "dataScience2.png",
                "category" => "Data Science",
                "writer_id" => $writers->random()->id,
            ],
            [
                "title" => "Natural Language Processing",
                "body" => $faker->paragraph,
                "photo_url" => "dataScience3.png",
                "category" => "Data Science",
                "writer_id" => $writers->random()->id,
            ],
            [
                "title" => "Network Fundamentals",
                "body" => $faker->paragraph,
                "photo_url" => "NetworkTech1.png",
                "category" => "Network Technology",
                "writer_id" => $writers->random()->id,
            ],
            [
                "title" => "Network Protocols and Architecture",
                "body" => $faker->paragraph,
                "photo_url" => "NetworkTech2.png",
                "category" => "Network Technology",
                "writer_id" => $writers->random()->id,
            ],
            [
                "title" => "Introduction to Network Security",
                "body" => $faker->paragraph,
                "photo_url" => "NetworkTech3.png",
                "category" => "Network Technology",
                "writer_id" => $writers->random()->id,
            ],
        ];

        foreach ($arrayOfArticle as $articleData) {
            Article::create($articleData);
        }
    }
}
