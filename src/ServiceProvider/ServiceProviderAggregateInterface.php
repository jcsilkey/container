<?php

namespace League\Container\ServiceProvider;

use League\Container\ContainerAwareInterface;

interface ServiceProviderAggregateInterface extends ContainerAwareInterface
{
    /**
     * Add a service provider to the aggregate.
     *
     * @param  string|\League\Container\ServiceProvider\ServiceProviderInterface $provider
     * @return \League\Container\ServiceProvider\ServiceProviderAggregateInterface
     */
    public function add($provider);

    /**
     * Determines whether a service is provided by the aggregate.
     *
     * @param  string $service
     * @return boolean
     */
    public function provides($service);

    /**
     * Invokes the register method of a provider that provides a specific service.
     *
     * @param  string $provider
     * @return void
     */
    public function register($provider);
}