<?php

namespace App\Containers\Messenger\Data\Repositories;

use App\Containers\Messenger\Models\Thread;
use App\Ship\Parents\Repositories\Repository;

/**
 * Class MessageRepository
 */
class MessageRepository extends Repository
{

    /**
     * The Container Name.
     * Must be set when the model has a different name than the container
     */
    protected $container = 'Messenger';

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

    public function byThread(Thread $thread)
    {
        return $thread->messages()->with('user')->orderBy('created_at', 'desc')->paginate();
    }

}
