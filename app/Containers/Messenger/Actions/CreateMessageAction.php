<?php

namespace App\Containers\Messenger\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateMessageAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'thread_id',
            'text',
            'image'
        ]);

        $user = $this->call('Authentication@GetAuthenticatedUserTask');

        //Append user id to data
        $data['user_id'] = $user->id;

        $message = $this->call('Messenger@CreateMessageTask', [$data]);

        return $message;
    }
}
