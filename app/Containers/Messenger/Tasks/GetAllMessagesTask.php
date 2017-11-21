<?php

namespace App\Containers\Messenger\Tasks;

use App\Containers\Messenger\Data\Repositories\MessageRepository;
use App\Containers\Messenger\Models\Thread;
use App\Ship\Parents\Tasks\Task;

class GetAllMessagesTask extends Task
{

    private $repository;

    public function __construct(MessageRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(Thread $thread)
    {
        return $this->repository->byThread($thread);
    }
}
