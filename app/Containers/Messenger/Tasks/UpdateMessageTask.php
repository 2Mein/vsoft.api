<?php

namespace App\Containers\Messenger\Tasks;

use App\Containers\Messenger\Data\Repositories\MessageRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateMessageTask extends Task
{

    private $repository;

    public function __construct(MessageRepository $repository)
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
