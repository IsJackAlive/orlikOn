<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::upsert(
            [
                [
                    'name' => 'Damian', 'email' => 'damians2001@gmail.com', 'phone' => '666 130 123', 'password' => Hash::make('1234'), 'role_id' => 1,
                ],
                [
                    'name' => 'Albert', 'email' => 'albert@email.com', 'phone' => '999 832 231', 'password' => Hash::make('1234'), 'role_id' => 2,
                ],
                [
                    'name' => 'Michał', 'email' => 'michal@email.com', 'phone' => '892 832 231', 'password' => Hash::make('1234'), 'role_id' => 3,
                ],
                [
                    'name' => 'Piotr', 'email' => 'piotr@email.com', 'phone' => '892 832 681', 'password' => Hash::make('1234'), 'role_id' => 3,
                ],
                [
                    'name' => 'Jan', 'email' => 'jan@email.com', 'phone' => '892 821 331', 'password' => Hash::make('1234'), 'role_id' => 4,
                ],
                [
                    'name' => 'Wojtek', 'email' => 'wojtek@email.com', 'phone' => '892 867 351', 'password' => Hash::make('1234'), 'role_id' => 4,
                ],
                [
                    'name' => 'Anna', 'email' => 'anna@email.com', 'phone' => '967 821 331', 'password' => Hash::make('1234'), 'role_id' => 4,
                ],
                [
                    'name' => 'Aleksander', 'email' => 'ale@email.com', 'phone' => '864 453 351', 'password' => Hash::make('1234'), 'role_id' => 4,
                ],
                [
                    'name' => 'Adrian', 'email' => 'adr@email.com', 'phone' => '864 454 361', 'password' => Hash::make('1234'), 'role_id' => 4,
                ],
            ],
            'name'
        );

    }
}
