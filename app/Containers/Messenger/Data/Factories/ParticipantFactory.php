<?php

use App\Containers\User\Models\User;

$factory->define(App\Containers\Messenger\Models\Participant::class, function (Faker\Generator $faker) {

    return [
        'thread_id' => function () {
            return Thread::inRandomOrder()->first()->id;
        },
        'user_id' => function () {
            return User::inRandomOrder()->first()->id;
        },
        'last_read' => $faker->dateTimeBetween('-1 week')
    ];
});