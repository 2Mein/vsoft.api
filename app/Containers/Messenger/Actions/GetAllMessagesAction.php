<?php

namespace App\Containers\Messenger\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllMessagesAction extends Action
{
    public function run(Request $request)
    {
        $thread = $this->call('Messenger@FindThreadByIdTask', [$request->thread_id]);

        $messages = $this->call('Messenger@GetAllMessagesTask', [$thread]);

        return $messages;
    }
}
