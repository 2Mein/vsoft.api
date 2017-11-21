<?php

namespace App\Containers\User\Data\Seeders;

use App\Containers\User\Models\User;
use App\Ship\Parents\Seeders\Seeder;

class UserSeeder_1 extends Seeder
{
    public function run()
    {
        factory(User::class)->create([
            'email' => 'petermein@gmail.com'
        ]);


        factory(User::class, 50)->create();
    }
}
