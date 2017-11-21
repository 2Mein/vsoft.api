<?php

namespace App\Containers\Authentication\Data\Seeders;

use App\Ship\Parents\Seeders\Seeder;
use Illuminate\Support\Facades\DB;

class AuthenticationSeeder_1 extends Seeder
{
    public function run()
    {
        DB::table('oauth_clients')->insert([
            'id' => 1,
            'user_id' => null,
            'name' => 'Testing Client',
            'secret' => 'jmqHAf2w6n3wU8CSrkZK22kqPZtyNVZdvZtHiSZC',
            'redirect' => '',
            'personal_access_client' => 0,
            'password_client' => 1,
            'revoked' => 0
        ]);
    }
}
