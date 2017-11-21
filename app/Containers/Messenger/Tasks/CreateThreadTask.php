<?php

namespace App\Containers\Messenger\Tasks;

use App\Containers\Messenger\Data\Repositories\ThreadRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateThreadTask extends Task
{

    private $repository;

    public function __construct(ThreadRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
