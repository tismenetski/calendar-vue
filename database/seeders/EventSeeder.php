<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([

            'name' => 'Doctor Appointment',
            'details' => 'Go See DR Shakola',
            'start' => Carbon::create(2022,1,14,15,0,0),
            'end' => Carbon::create(2022,1,14,17,0,0),
            'color' => '#354323'
        ]);

        Event::create([

            'name' => 'Work Meeting',
            'details' => 'Discuss Paycheck',
            'start' => Carbon::create(2022,1,14,15,0,0),
            'end' => Carbon::create(2022,1,14,17,0,0),
            'color' => '#324323'
        ]);
    }
}
