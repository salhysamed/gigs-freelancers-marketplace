<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Gig;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //\App\Models\User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Gig::factory(5)->create();
/*
        Gig::create([
            'title' => 'Laravel developer',
            'company' => 'DAL. Ltd',
            'description' => 'Lorem ipsum dolor sit amet,
            consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud
              exercitation ullamco laboris nisi ut aliquip 
              ex ea commodo consequat.',
              'email' => 'test@gigs.com',
              'phone' => '+1 90 67 67 33',
              'website' => 'gigs.com',
              'tags' => 'gig, freelance, job, laravel, backend'


        
        ]);
        Gig::create([
            'title' => 'FullStack developer',
            'company' => 'DFT. Ltd',
            'description' => 'Lorem ipsum dolor sit amet,
            consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud
              exercitation ullamco laboris nisi ut aliquip 
              ex ea commodo consequat.',
              'email' => 'test@gigs.com',
              'phone' => '+1 90 67 67 33',
              'website' => 'gigs.com',
              'tags' => 'gig, freelance, job, fullstack, backend'


        
        ]);
        */
    }
}
