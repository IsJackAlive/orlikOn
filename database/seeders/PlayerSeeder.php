<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Player::upsert(
            [
                [
                    'user_id' => 3, 'game_id' => 1, 'status' => 'gra', 'rank'=> 'uprzywilejowany',
                ],
                [
                    'user_id' => 5, 'game_id' => 1, 'status' => 'gra', 'rank'=> 'normalny',
                ],
                [
                    'user_id' => 6, 'game_id' => 1, 'status' => 'gra', 'rank'=> 'gość',
                ],
                [
                    'user_id' => 7, 'game_id' => 1, 'status' => 'rezerwowy', 'rank'=> 'gość',
                ],
                [
                    'user_id' => 8, 'game_id' => 1, 'status' => 'nie przyjdę', 'rank'=> 'normalny',
                ],
                [
                    'user_id' => 9, 'game_id' => 1, 'status' => 'gra', 'rank'=> 'gość',
                ],
                [
                    'user_id' => 4, 'game_id' => 2, 'status' => 'gra', 'rank'=> 'uprzywilejowany',
                ],
                [
                    'user_id' => 5, 'game_id' => 2, 'status' => 'gra', 'rank'=> 'normalny',
                ],
                [
                    'user_id' => 6, 'game_id' => 2, 'status' => 'gra', 'rank'=> 'gość',
                ],
                [
                    'user_id' => 7, 'game_id' => 2, 'status' => 'rezerwowy', 'rank'=> 'gość',
                ],
                [
                    'user_id' => 8, 'game_id' => 2, 'status' => 'nie przyjdę', 'rank'=> 'normalny',
                ],
                [
                    'user_id' => 9, 'game_id' => 2, 'status' => 'gra', 'rank'=> 'gość',
                ],
            ],
            'user_id'
        );
    }
}
