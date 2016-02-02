<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('entity_homepage', new Route('/', array(
    '_controller' => 'EntityBundle:Default:index',
)));

return $collection;
