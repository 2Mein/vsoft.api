<?php

namespace App\Containers\Messenger\Models;

use Apiato\Core\Traits\HashIdTrait;
use Apiato\Core\Traits\HasResourceKeyTrait;

class Thread extends \Cmgmyr\Messenger\Models\Thread
{
    use HashIdTrait;
    use HasResourceKeyTrait;

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'threads';

    public function getLastRead($format = 'U')
    {
        return $this->pivot !== null ? $this->asDate($this->pivot->last_read)->format($format) : null;
    }

    public function getJoinDate($format = 'U')
    {
        return $this->pivot !== null ? $this->asDate($this->pivot->created_at)->format($format) : null;
    }
}
