<?php

declare(strict_types=1);

namespace UnknownRori\Container;

use Psr\Container\ContainerInterface;

class Container implements ContainerInterface
{
    protected array $instance = [];

    /**
     * Get the instance using given identifier
     * @param  string  $id
     * @throws \UnknownRori\Container\NotFoundException
     * 
     * @return mixed
     */
    public function get(string $id)
    {
        if (!array_key_exists($id, $this->instance))
            throw new NotFoundException("Key {$id} is not found in this container!");

        return $this->instance[$id];
    }

    /**
     * Check if the container has the identifier
     * @param  string $id
     * 
     * @return bool
     */
    public function has(string $id): bool
    {
        return array_key_exists($id, $this->instance);
    }

    /**
     * Set the current identifier
     * @param  string  $id
     * @param  mixed   $data
     * 
     * @return void
     */
    public function set(string $id, $data): void
    {
        $this->instance[$id] = $data;
    }
}
