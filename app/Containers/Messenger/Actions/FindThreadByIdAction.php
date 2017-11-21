<?php

namespace App\Containers\Messenger\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindThreadByIdAction extends Action
{
    public function run(Request $request)
    {
        $thread = $this->call('Messenger@FindThreadByIdTask', [$request->id]);

        return $thread;
    }
}
