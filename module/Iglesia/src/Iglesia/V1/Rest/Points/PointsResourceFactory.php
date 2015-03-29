<?php
namespace Iglesia\V1\Rest\Points;

class PointsResourceFactory
{
    public function __invoke($services)
    {
        //return new PointsResource();
        $mapper = $services->get('Iglesia\V1\Rest\Points\Model\PointsTable'); 

        return new PointsResource($mapper);
    }
}
