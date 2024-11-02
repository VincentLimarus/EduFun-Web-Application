<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Writer;
use App\Models\Article;

class WriterSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for($i = 0; $i < 3; $i++){
            Writer::create([
                'name' => $faker->name,
                'job' => $faker->jobTitle,
                'photo_url'=> "writer$i.png"
            ]);
        }
    }
}
