<?php

namespace App\Containers\Messenger\Data\Repositories;

use App\Containers\User\Models\User;
use App\Ship\Parents\Repositories\Repository;

/**
 * Class ThreadRepository
 */
class ThreadRepository extends Repository
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
        'subject' => 'LIKE'
    ];


    public function byUser(User $user)
    {
        return $user->threads()->withPivot('last_read')->withTimestamps()->orderBy('last_read', 'desc')->paginate();
    }

    public function byUserWithMessages(User $user)
    {
        return $user->threadsWithNewMessages();
    }

    public function threadCountByUser(User $user)
    {
        return $user->newThreadsCount();
    }

}
