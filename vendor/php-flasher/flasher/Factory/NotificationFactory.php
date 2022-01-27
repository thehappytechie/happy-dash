<?php

namespace Flasher\Prime\Factory;

use Flasher\Prime\Notification\Template;
use Flasher\Prime\Notification\TemplateBuilder;
use Flasher\Prime\Storage\StorageManagerInterface;

class NotificationFactory implements NotificationFactoryInterface
{
    /**
     * @var StorageManagerInterface
     */
    protected $storageManager;

    public function __construct(StorageManagerInterface $storageManager)
    {
        $this->storageManager = $storageManager;
    }

    /**
     * Dynamically call the default driver instance.
     *
     * @param string $method
     * @param mixed[] $parameters
     *
     * @return mixed
     */
    public function __call($method, array $parameters)
    {
        /** @var callable $callback */
        $callback = array($this->createNotificationBuilder(), $method);

        return call_user_func_array($callback, $parameters);
    }

    public function createNotificationBuilder()
    {
        @trigger_error('deprecated use TemplateFactory instead, it will be removed in v1.0.0', \E_USER_DEPRECATED);

        return new TemplateBuilder($this->getStorageManager(), new Template(), 'template');
    }

    /**
     * @return StorageManagerInterface
     */
    public function getStorageManager()
    {
        return $this->storageManager;
    }
}
