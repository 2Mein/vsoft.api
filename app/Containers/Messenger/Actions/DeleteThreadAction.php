<?php

namespace App\Containers\Messenger\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteThreadAction extends Action
{
    public function run(Request $request)
    {
        return $this->call('Messenger@DeleteThreadTask', [$request->id]);
    }
}
