<?php

namespace Database\Seeders;

use App\Models\Pitch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PitchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pitch::upsert(
            [
                [
                    'name' => 'Żyraków Orlik', 'address' => '39-204 Żyraków 77', 'description' => 'Darmowe oświetlenie.', 
                    'hour_open' => '14:00', 'hour_close' => '23:40', 'user_id' => 2, 
                ],
                [
                    'name' => ' Orlik Strunowca', 'address' => 'ul. Strumskiego 1, 39-200 Dębica', 'description' => 'Darmowe prysznice.', 
                    'hour_open' => '16:00', 'hour_close' => '22:00', 'user_id' => 2, 
                ],
            ],
            'name'
        );
    }
}
