<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listings;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);


        Listings::create([
            'title' => 'Angular, React native',
            'tags' => 'Angular JS, React Native, Javasscript, Node JS, Express JS',
            'company' => 'Technovations Corp',
            'location' => 'Nairobi, KE',
            'email' => 'email@gmail.com',
            'website' => 'https://www.acme.com',
            'description' => 'This is a story that I would want to be told generations and generation over time to be a teaching of the great love that the lord has for those who believes in HIM'
        ]);



    }
}
