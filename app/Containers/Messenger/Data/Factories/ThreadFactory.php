<?php

$factory->define(App\Containers\Messenger\Models\Thread::class, function (Faker\Generator $faker) {

    return [
        'subject' => $faker->sentence(),
        'avatar' => $faker->imageUrl(),
    ];
});