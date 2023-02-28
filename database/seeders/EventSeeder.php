<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = Event::factory(30)->create();

        foreach ($events as $event) {
            Image::factory(1)->create([
                'imageable_id' => $event->id,
                'imageable_type' => Event::class
            ]);

            $event->tags()->attach([
                rand(1, 6),
                rand(7, 12)
            ]);
        }
    }
}
