<?php
return array(
    'router' => array(
        'routes' => array(
            'iglesia.rest.users' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/users[/:users_id]',
                    'defaults' => array(
                        'controller' => 'iglesia\\V1\\Rest\\Users\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'iglesia.rest.users',
        ),
    ),
    'zf-rest' => array(
        'iglesia\\V1\\Rest\\Users\\Controller' => array(
            'listener' => 'iglesia\\V1\\Rest\\Users\\UsersResource',
            'route_name' => 'iglesia.rest.users',
            'route_identifier_name' => 'users_id',
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
            'entity_class' => 'iglesia\\V1\\Rest\\Users\\UsersEntity',
            'collection_class' => 'iglesia\\V1\\Rest\\Users\\UsersCollection',
            'service_name' => 'users',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'iglesia\\V1\\Rest\\Users\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'iglesia\\V1\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.iglesia.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'iglesia\\V1\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.iglesia.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'iglesia\\V1\\Rest\\Users\\UsersEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'iglesia.rest.users',
                'route_identifier_name' => 'users_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'iglesia\\V1\\Rest\\Users\\UsersCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'iglesia.rest.users',
                'route_identifier_name' => 'users_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'iglesia\\V1\\Rest\\Users\\UsersResource' => array(
                'adapter_name' => 'db1',
                'table_name' => 'users',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'iglesia\\V1\\Rest\\Users\\Controller',
                'entity_identifier_name' => 'id',
            ),
        ),
    ),
);
