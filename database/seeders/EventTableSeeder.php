<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::query()->insert([
            [
                'title' => 'reach the goal',
                'start' => '2021-05-16 14:40:58',
                'end' => '2021-05-16 14:41:20',
                'color' => '#90a3cb',
                'description' => 'im php developer',
            ],
            [
                'title' => 'sarbazi',
                'start' => '2021-05-16 14:40:58',
                'end' => '2021-05-18 16:51:23',
                'color' => '#c40233',
                'description' => 'im good life',
            ],
        ]);
    }
}
