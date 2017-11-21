<?php

namespace App\Containers\Messenger\Tasks;

use App\Containers\Messenger\Data\Repositories\ThreadRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateThreadTask extends Task
{

    private $repository;

    public function __construct(ThreadRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
