<?php

namespace App\Containers\Messenger\UI\API\Transformers;

use App\Containers\Messenger\Models\Thread;
use App\Ship\Parents\Transformers\Transformer;

class ParticipantTransformer extends Transformer
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
    public function transform(Thread $entity)
    {
        $response = [
            'object' => 'Thread',
            '_id' => $entity->getHashedKey(),
            'subject' => $entity->subject,
            'created_at' => (int)$entity->created_at->format('U'),
            'updated_at' => (int)$entity->updated_at->format('U'),

        ];

        $response = $this->ifAdmin([
            'real_id' => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
