<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\About;
use App\Models\Category;
use App\Models\Knowledge;
use App\Models\Member;
use App\Models\Objetive;
use App\Models\ODS;
use App\Models\Suggestion;
use App\Models\Tag;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::disk('public')->deleteDirectory('events');
        Storage::disk('public')->makeDirectory('events');

        User::create([
            'name' => 'Prueba',
            'last_name' => 'Last_Name Prueba',
            'phone' => '123456789',
            'status' => 1,
            'email' => 'prueba@gmail.com',
            'password' => bcrypt('prueba')
        ]);

        User::factory(10)->create();
        About::factory(4)->create();
        Category::factory(5)->create();
        Tag::factory(30)->create();
        $this->call(EventSeeder::class);

        $this->call(ProjectSeeder::class);
        Knowledge::factory(5)->create();
        Objetive::factory(30)->create();
        ODS::factory(15)->create();

        Member::factory(10)->create();
        Suggestion::factory(15)->create();

        Testimonial::factory(10)->create();
    }
}
