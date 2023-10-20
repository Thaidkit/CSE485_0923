<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Artwork;


class ArtworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('artworks')->delete();

        $faker = Faker::create();

        for ($i=0; $i<20; $i++){
            Artwork::create([
                'id' => $i+1,
                'artist_name' => $faker->name,
                'description' => $faker->paragraph,
                'art_type' => $faker->randomElement(['van hoc', 'hoi hoa', 'am nhac']),
                'media_link' => $faker->url,
                'cover_image' => $faker->imageUrl(640, 480, 'artist', true),
            ]);
        }
    }
}
