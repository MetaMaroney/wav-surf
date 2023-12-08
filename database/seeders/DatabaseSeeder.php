<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $total_fake_users = 50;

        $profiles = \App\Models\Profile::factory($total_fake_users)->
            has(\App\Models\ProfilePicture::factory())->
            has(\App\Models\Library::factory(fake()->numberBetween(1, 5)))->create();
        
        $grouplibraries = \App\Models\GroupLibrary::factory($total_fake_users * 2)->create();

        foreach(\App\Models\GroupLibrary::all() as $grouplibrary)
        {
            $profiles = \App\Models\Profile::inRandomOrder()->take(rand(1, 5))->pluck('id');
            $grouplibrary->profiles()->attach($profiles);
        }
    }
}
