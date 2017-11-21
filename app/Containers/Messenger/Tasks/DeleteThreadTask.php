<?php

namespace App\Containers\Messenger\Tasks;

use App\Containers\Messenger\Data\Repositories\ThreadRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteThreadTask extends Task
{

    private $repository;

    public function __construct(ThreadRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
