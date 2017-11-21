<?php

namespace App\Containers\Messenger\Models;

use Apiato\Core\Traits\HashIdTrait;
use Apiato\Core\Traits\HasResourceKeyTrait;

class Message extends \Cmgmyr\Messenger\Models\Message
{
    use HashIdTrait;
    use HasResourceKeyTrait;

    protected $perPage = 50;

    protected $fillable = ['thread_id', 'user_id', 'text'];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'messages';
}
