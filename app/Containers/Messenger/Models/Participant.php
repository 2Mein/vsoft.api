<?php

namespace App\Containers\Messenger\Models;

use Apiato\Core\Traits\HashIdTrait;
use Apiato\Core\Traits\HasResourceKeyTrait;

class Participant extends \Cmgmyr\Messenger\Models\Participant
{
    use HashIdTrait;
    use HasResourceKeyTrait;

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'participants';
}
