<?php

namespace App\Containers\Messenger\UI\API\Transformers;

use App\Containers\Messenger\Models\Thread;
use App\Ship\Parents\Transformers\Transformer;

class ThreadTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [
        'last_message'
    ];

    /**
     * @param Thread $entity
     *
     * @return array
     */
    public function transform(Thread $entity)
    {
        $response = [
            'object' => 'Thread',
            '_id' => $entity->getHashedKey(),
            'subject' => $entity->subject,
            'last_read' => (int)$entity->getLastRead(),
            'avatar' => $entity->avatar,
            //'unread_count' => $entity->userUnreadMessagesCount($this->user()->id),
            'join_date' => (int)$entity->getJoinDate(),
            'created_at' => (int)$entity->created_at->format('U'),
            'updated_at' => (int)$entity->updated_at->format('U'),

        ];

        $response = $this->ifAdmin([
            'real_id' => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }

    public function includeLastMessage(Thread $entity)
    {
        //return $entity->
    }
}
