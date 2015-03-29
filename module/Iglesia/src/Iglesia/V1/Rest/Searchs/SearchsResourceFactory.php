<?php
namespace Iglesia\V1\Rest\Searchs;

class SearchsResourceFactory
{
    public function __invoke($services)
    {
        return new SearchsResource();
    }
}
