<?php

namespace App\Containers\Messenger\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllThreadsAction extends Action
{
    public function run(Request $request)
    {
        $user = $this->call('Authentication@GetAuthenticatedUserTask');

        $threads = $this->call('Messenger@GetAllThreadsTask', [$user]);

        return $threads;
    }
}
