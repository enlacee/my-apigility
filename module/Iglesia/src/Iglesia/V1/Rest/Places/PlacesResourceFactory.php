<?php
namespace Iglesia\V1\Rest\Places;

class PlacesResourceFactory
{
    public function __invoke($services)
    {
        return new PlacesResource();
    }
}
