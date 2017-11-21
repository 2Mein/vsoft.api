<?php

namespace App\Containers\Messenger\Providers;

use App\Ship\Parents\Providers\MainProvider;
use Cmgmyr\Messenger\MessengerServiceProvider;

/**
 * Class MainServiceProvider.
 *
 * The Main Service Provider of this container, it will be automatically registered in the framework.
 */
class MainServiceProvider extends MainProvider
{

    /**
     * Container Service Providers.
     *
     * @var array
     */
    public $serviceProviders = [
        // InternalServiceProviderExample::class,
        MessengerServiceProvider::class,
    ];

    /**
     * Container Aliases
     *
     * @var  array
     */
    public $aliases = [
        // 'Foo' => Bar::class,
    ];

    /**
     * Register anything in the container.
     */
    public function register()
    {
        parent::register();

        // $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        // ...
    }
}
