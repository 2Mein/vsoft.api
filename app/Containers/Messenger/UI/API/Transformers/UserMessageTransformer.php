<?php

namespace App\Containers\Messenger\UI\API\Transformers;

use App\Containers\Messenger\Models\Thread;
use App\Containers\User\Models\User;
use App\Ship\Parents\Transformers\Transformer;

class UserMessageTransformer extends Transformer
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

    ];

    /**
     * @param Thread $entity
     *
     * @return array
     */
    public function transform(User $entity)
    {
        $response = [
            'object' => 'User',
            '_id' => $entity->getHashedKey(),
            'name' => $entity->name,
            'avatar' => $entity->social_avatar
        ];

        $response = $this->ifAdmin([
            'real_id' => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
