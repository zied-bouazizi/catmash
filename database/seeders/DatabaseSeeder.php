<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $images = Http::get('https://latelier.co/data/cats.json')['images'];

        foreach ($images as $image) {
            Image::create([
                'url' => $image['url'],
            ]);
        }
    }
}
