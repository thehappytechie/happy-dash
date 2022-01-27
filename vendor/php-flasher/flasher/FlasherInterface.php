<?php

namespace Flasher\Prime;

use Flasher\Prime\Factory\NotificationFactoryInterface;
use Flasher\Prime\Notification\NotificationBuilderInterface;

/**
 * @mixin NotificationBuilderInterface
 */
interface FlasherInterface
{
    /**
     * Get a driver instance.
     *
     * @param string|null $alias
     *
     * @return NotificationFactoryInterface
     *
     * @throws \InvalidArgumentException
     */
    public function create($alias = null);

    /**
     * Get a driver instance.
     *
     * @param string|null $alias
     *
     * @return NotificationFactoryInterface
     *
     * @throws \InvalidArgumentException
     */
    public function using($alias);

    /**
     * Register a custom driver creator.
     *
     * @param string           $alias
     *
     * @return $this
     */
    public function addFactory($alias, NotificationFactoryInterface $factory);

    /**
     * @param array<string, mixed> $criteria
     * @param string $presenter
     * @param array<string, mixed> $context
     *
     * @return mixed
     */
    public function render(array $criteria = array(), $presenter = 'html', array $context = array());
}
