<?php

namespace App\Containers\Messenger\UI\API\Transformers;

use App\Containers\Messenger\Models\Message;
use App\Ship\Parents\Transformers\Transformer;

class MessageTransformer extends Transformer
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
        'user'
    ];

    /**
     * @param Message $entity
     *
     * @return array
     */
    public function transform(Message $entity)
    {
        $response = [
            'object' => 'Message',
            '_id' => $entity->getHashedKey(),
            'text' => $entity->text,
            'image' => $entity->image,
            'created_at' => (int)$entity->created_at->format('U'),
            'updated_at' => (int)$entity->updated_at->format('U'),

        ];

        $response = $this->ifAdmin([
            'real_id' => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }

    public function includeUser(Message $entity)
    {
        $user = $entity->user;

        return $this->item($user, new UserMessageTransformer(), 'user');
    }
}
