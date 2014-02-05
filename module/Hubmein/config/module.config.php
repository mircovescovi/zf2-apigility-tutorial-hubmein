<?php
return array(
    'router' => array(
        'routes' => array(
            'hubmein.rest.event' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/api/event[/:event_id]',
                    'defaults' => array(
                        'controller' => 'Hubmein\\V1\\Rest\\Event\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'hubmein.rest.event',
        ),
    ),
//    'service_manager' => array(
//        'invokables' => array(
//            //'Hubmein\\V1\\Rest\\Event\\EventResource' => 'Hubmein\\V1\\Rest\\Event\\EventResource',
//        ),
//    ),
    'zf-rest' => array(
        'Hubmein\\V1\\Rest\\Event\\Controller' => array(
            'listener' => 'Hubmein\\V1\\Rest\\Event\\EventResource',
            'route_name' => 'hubmein.rest.event',
            'route_identifier_name' => 'event_id',
            'collection_name' => 'event',
            'resource_http_methods' => array(
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
            'entity_class' => 'Hubmein\\V1\\Rest\\Event\\EventEntity',
            'collection_class' => 'Hubmein\\V1\\Rest\\Event\\EventCollection',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Hubmein\\V1\\Rest\\Event\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'Hubmein\\V1\\Rest\\Event\\Controller' => array(
                0 => 'application/vnd.hubmein.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'Hubmein\\V1\\Rest\\Event\\Controller' => array(
                0 => 'application/vnd.hubmein.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Hubmein\\V1\\Rest\\Event\\EventEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'hubmein.rest.event',
                'route_identifier_name' => 'event_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Hubmein\\V1\\Rest\\Event\\EventCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'hubmein.rest.event',
                'route_identifier_name' => 'event_id',
                'is_collection' => true,
            ),
        ),
    ),
);
