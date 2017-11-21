<?php

use App\Containers\User\Models\User;

$factory->define(App\Containers\Messenger\Models\Message::class, function (Faker\Generator $faker) {

    $date = $faker->dateTimeBetween('-1 week');

    return [
        'thread_id' => $faker->sentence(),
        'user_id' => function () {
            return User::inRandomOrder()->first()->id;
        },
        'image' => $faker->randomElement([$faker->imageUrl(), null]),
        'text' => $faker->sentences(3, true),
        'created_at' => $date,
        'updated_at' => $date
    ];
});