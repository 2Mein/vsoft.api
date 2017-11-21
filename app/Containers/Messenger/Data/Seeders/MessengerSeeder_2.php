<?php

namespace App\Containers\Messenger\Data\Seeders;

use App\Containers\Messenger\Models\Message;
use App\Containers\Messenger\Models\Participant;
use App\Containers\Messenger\Models\Thread;
use App\Ship\Parents\Seeders\Seeder;

class MessengerSeeder_2 extends Seeder
{
    public function run()
    {
        $threads = factory(Thread::class, 50)->create()->each(function (Thread $thread) {
            factory(Participant::class, rand(10, 20))->create([
                'thread_id' => $thread->id
            ])->each(function (Participant $participant) use ($thread) {
                factory(Message::class, rand(2, 10))->create([
                    'thread_id' => $thread->id,
                    'user_id' => $participant->user_id
                ]);
            });
        });
    }
}
