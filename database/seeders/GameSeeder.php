<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Game::upsert(
            [
                [
                    'name' => 'Ekipa MiCH', 'date' => '2022-08-26', 'max_players' => 10, 
                    'description' => 'Marek bierze koszulki, Piotrek Piłkę', 'hour_start' => 19.00, 'hour_end' => 20.40,
                    'user_id' => 3, 'pitch_id' => 1, 
                ],
                [
                    'name' => 'Pi0', 'date' => '2022-08-26', 'max_players' => 12, 
                    'description' => 'Gramy w 1000-ca', 'hour_start' => 20.00, 'hour_end' => 21.40,
                    'user_id' => 4, 'pitch_id' => 2,
                ],
            ],
            'name'
        );
    }
}
