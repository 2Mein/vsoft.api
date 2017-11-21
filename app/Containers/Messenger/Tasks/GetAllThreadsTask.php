<?php

namespace App\Containers\Messenger\Tasks;

use App\Containers\Messenger\Data\Repositories\ThreadRepository;
use App\Containers\User\Models\User;
use App\Ship\Parents\Tasks\Task;

class GetAllThreadsTask extends Task
{

    private $repository;

    public function __construct(ThreadRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(User $user)
    {
        return $this->repository->byUser($user);
    }
}
