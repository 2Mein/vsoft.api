<?php

namespace App\Containers\Messenger\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteMessageAction extends Action
{
    public function run(Request $request)
    {
        return $this->call('Messenger@DeleteMessageTask', [$request->id]);
    }
}
