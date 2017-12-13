<?php

use Illuminate\Database\Seeder;
use App\Visitor;

class VisitorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Visitor::create([
            'name' => 'Roni',
            'destination' => 'Halte Bus',
            'days' => 'sunday',
        ]);

        Visitor::create([
            'name' => 'Dino',
            'destination' => 'Halte Bus',
            'days' => 'sunday',
        ]);

        Visitor::create([
            'name' => 'Dina',
            'destination' => 'Halte Bus',
            'days' => 'sunday',
        ]);

        Visitor::create([
            'name' => 'Bima',
            'destination' => 'Halte Bus',
            'days' => 'sunday',
        ]);

        Visitor::create([
            'name' => 'Erika',
            'destination' => 'Pasar',
            'days' => 'friday',
        ]);

        Visitor::create([
            'name' => 'Risky',
            'destination' => 'Taman',
            'days' => 'wednesday',
        ]);

        Visitor::create([
            'name' => 'Dini',
            'destination' => 'Kantor',
            'days' => 'monday',
        ]);
    }
}
