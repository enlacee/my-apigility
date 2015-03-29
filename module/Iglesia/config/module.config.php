<?php
return array(
    'router' => array(
        'routes' => array(
            'iglesia.rest.users' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/users[/:user_id]',
                    'defaults' => array(
                        'controller' => 'Iglesia\\V1\\Rest\\Users\\Controller',
                    ),
                ),
            ),
            'iglesia.rest.searchs' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/searchs[/:search_id]',
                    'defaults' => array(
                        'controller' => 'Iglesia\\V1\\Rest\\Searchs\\Controller',
                    ),
                ),
            ),
            'iglesia.rest.places' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/places[/:place_id]',
                    'defaults' => array(
                        'controller' => 'Iglesia\\V1\\Rest\\Places\\Controller',
                    ),
                ),
            ),
            'iglesia.rest.points' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/points[/:point_id]',
                    'defaults' => array(
                        'controller' => 'Iglesia\\V1\\Rest\\Points\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'iglesia.rest.users',
            1 => 'iglesia.rest.searchs',
            3 => 'iglesia.rest.places',
            4 => 'iglesia.rest.points',
        ),
    ),
    'zf-rest' => array(
        'Iglesia\\V1\\Rest\\Users\\Controller' => array(
            'listener' => 'Iglesia\\V1\\Rest\\Users\\UsersResource',
            'route_name' => 'iglesia.rest.users',
            'route_identifier_name' => 'user_id',
            'collection_name' => 'users',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Iglesia\\V1\\Rest\\Users\\UsersEntity',
            'collection_class' => 'Iglesia\\V1\\Rest\\Users\\UsersCollection',
            'service_name' => 'users',
        ),
        'Iglesia\\V1\\Rest\\Searchs\\Controller' => array(
            'listener' => 'Iglesia\\V1\\Rest\\Searchs\\SearchsResource',
            'route_name' => 'iglesia.rest.searchs',
            'route_identifier_name' => 'search_id',
            'collection_name' => 'searchs',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Iglesia\\V1\\Rest\\Searchs\\SearchsEntity',
            'collection_class' => 'Iglesia\\V1\\Rest\\Searchs\\SearchsCollection',
            'service_name' => 'searchs',
        ),
        'Iglesia\\V1\\Rest\\Places\\Controller' => array(
            'listener' => 'Iglesia\\V1\\Rest\\Places\\PlacesResource',
            'route_name' => 'iglesia.rest.places',
            'route_identifier_name' => 'place_id',
            'collection_name' => 'places',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Iglesia\\V1\\Rest\\Places\\PlacesEntity',
            'collection_class' => 'Iglesia\\V1\\Rest\\Places\\PlacesCollection',
            'service_name' => 'places',
        ),
        'Iglesia\\V1\\Rest\\Points\\Controller' => array(
            'listener' => 'Iglesia\\V1\\Rest\\Points\\PointsResource',
            'route_name' => 'iglesia.rest.points',
            'route_identifier_name' => 'point_id',
            'collection_name' => 'points',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Iglesia\\V1\\Rest\\Points\\PointsEntity',
            'collection_class' => 'Iglesia\\V1\\Rest\\Points\\PointsCollection',
            'service_name' => 'points',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Iglesia\\V1\\Rest\\Users\\Controller' => 'HalJson',
            'Iglesia\\V1\\Rest\\Searchs\\Controller' => 'HalJson',
            'Iglesia\\V1\\Rest\\Places\\Controller' => 'HalJson',
            'Iglesia\\V1\\Rest\\Points\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'Iglesia\\V1\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.iglesia.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Iglesia\\V1\\Rest\\Searchs\\Controller' => array(
                0 => 'application/vnd.iglesia.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Iglesia\\V1\\Rest\\Places\\Controller' => array(
                0 => 'application/vnd.iglesia.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Iglesia\\V1\\Rest\\Points\\Controller' => array(
                0 => 'application/vnd.iglesia.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'Iglesia\\V1\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.iglesia.v1+json',
                1 => 'application/json',
            ),
            'Iglesia\\V1\\Rest\\Searchs\\Controller' => array(
                0 => 'application/vnd.iglesia.v1+json',
                1 => 'application/json',
            ),
            'Iglesia\\V1\\Rest\\Places\\Controller' => array(
                0 => 'application/vnd.iglesia.v1+json',
                1 => 'application/json',
            ),
            'Iglesia\\V1\\Rest\\Points\\Controller' => array(
                0 => 'application/vnd.iglesia.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Iglesia\\V1\\Rest\\Users\\UsersEntity' => array(
                'entity_identifier_name' => 'user_id',
                'route_name' => 'iglesia.rest.users',
                'route_identifier_name' => 'user_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Iglesia\\V1\\Rest\\Users\\UsersCollection' => array(
                'entity_identifier_name' => 'user_id',
                'route_name' => 'iglesia.rest.users',
                'route_identifier_name' => 'user_id',
                'is_collection' => true,
            ),
            'Iglesia\\V1\\Rest\\Searchs\\SearchsEntity' => array(
                'entity_identifier_name' => 'search_id',
                'route_name' => 'iglesia.rest.searchs',
                'route_identifier_name' => 'search_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Iglesia\\V1\\Rest\\Searchs\\SearchsCollection' => array(
                'entity_identifier_name' => 'search_id',
                'route_name' => 'iglesia.rest.searchs',
                'route_identifier_name' => 'search_id',
                'is_collection' => true,
            ),
            'Iglesia\\V1\\Rest\\Places\\PlacesEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'iglesia.rest.places',
                'route_identifier_name' => 'place_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Iglesia\\V1\\Rest\\Places\\PlacesCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'iglesia.rest.places',
                'route_identifier_name' => 'place_id',
                'is_collection' => true,
            ),
            'Iglesia\\V1\\Rest\\Points\\PointsEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'iglesia.rest.points',
                'route_identifier_name' => 'point_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Iglesia\\V1\\Rest\\Points\\PointsCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'iglesia.rest.points',
                'route_identifier_name' => 'point_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'Iglesia\\V1\\Rest\\Users\\UsersResource' => array(
                'adapter_name' => 'db1',
                'table_name' => 'users',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'Iglesia\\V1\\Rest\\Users\\Controller',
                'entity_identifier_name' => 'user_id',
                'table_service' => 'Iglesia\\V1\\Rest\\Users\\UsersResource\\Table',
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'Iglesia\\V1\\Rest\\Searchs\\SearchsResource' => 'Iglesia\\V1\\Rest\\Searchs\\SearchsResourceFactory',
            'Iglesia\\V1\\Rest\\Places\\PlacesResource' => 'Iglesia\\V1\\Rest\\Places\\PlacesResourceFactory',
            'Iglesia\\V1\\Rest\\Points\\PointsResource' => 'Iglesia\\V1\\Rest\\Points\\PointsResourceFactory',
        ),
    ),
);
