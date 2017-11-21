<?php

return [

    'user_model' => App\Containers\User\Models\User::class,

    'message_model' => App\Containers\Messenger\Models\Message::class,

    'participant_model' => App\Containers\Messenger\Models\Participant::class,

    'thread_model' => App\Containers\Messenger\Models\Thread::class,

    /**
     * Define custom database table names - without prefixes.
     */
    'messages_table' => null,

    'participants_table' => null,

    'threads_table' => null,
];
