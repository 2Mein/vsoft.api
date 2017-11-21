<?php

namespace App\Ship\Parents\Transformers;

use Apiato\Core\Abstracts\Transformers\Transformer as AbstractTransformer;
use Illuminate\Support\Facades\Config;
use Vinkla\Hashids\Facades\Hashids;

/**
 * Class Transformer.
 *
 * @author  Mahmoud Zalt <mahmoud@zalt.me>
 */
abstract class Transformer extends AbstractTransformer
{
    public function getHashedKey($key)
    {
        // hash the ID only if hash-id enabled in the config
        if (Config::get('apiato.hash-id')) {
            return Hashids::encode($key);
        }

        return $key;
    }
}
