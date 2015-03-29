<?php
namespace Iglesia\V1\Rest\Points;

class PointsResourceFactory
{
    public function __invoke($services)
    {
        return new PointsResource();
    }
}
