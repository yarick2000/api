<?php

namespace Directus\Services;

use Directus\Application\Container;

class InterfacesService extends AbstractAddOnsController
{
    public function __construct(Container $container)
    {
        parent::__construct($container);

        $basePath = $this->container->get('path_base');
        $this->basePath = $basePath . '/public/core/interfaces';
    }

    public function findAll(array $params = [])
    {
        return $this->all($this->basePath, $params);
    }
}