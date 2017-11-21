<?php

namespace App\Containers\Messenger\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindMessageByIdAction extends Action
{
    public function run(Request $request)
    {
        $message = $this->call('Messenger@FindMessageByIdTask', [$request->id]);

        return $message;
    }
}
