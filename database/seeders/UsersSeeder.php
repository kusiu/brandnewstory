<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Meta;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\WithFaker;

class UsersSeeder extends Seeder
{
    use WithFaker;

    const USERS_COUNT = 1000;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= self::USERS_COUNT; $i++) {
            $user = User::create([
                'first_name' => "First Name {$i}",
                'last_name' => "Last Name {$i}",
                'email' => "Email {$i}",
            ]);

            Address::create([
                'user_id' => $user->id,
                'street' => "Street {$i}",
                'city' => "City {$i}",
                'country' => "Country {$i}",
            ]);

            Meta::create([
                'user_id' => $user->id,
                'key' => Meta::TYPE_PHONE,
                'value' => $i,
            ]);
        }
    }
}
