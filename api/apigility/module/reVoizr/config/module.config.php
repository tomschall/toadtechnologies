<?php
return [
    'service_manager' => [
        'factories' => [
            \reVoizr\V1\Rest\Pd_queue\Pd_queueResource::class => \reVoizr\V1\Rest\Pd_queue\Pd_queueResourceFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            're-voizr.rest.pd_queue' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/pd_queue[/:pd_queue_id]',
                    'defaults' => [
                        'controller' => 'reVoizr\\V1\\Rest\\Pd_queue\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 're-voizr.rest.pd_queue',
        ],
        'default_version' => 1,
    ],
    'zf-rest' => [
        'reVoizr\\V1\\Rest\\Pd_queue\\Controller' => [
            'listener' => \reVoizr\V1\Rest\Pd_queue\Pd_queueResource::class,
            'route_name' => 're-voizr.rest.pd_queue',
            'route_identifier_name' => 'pd_queue_id',
            'collection_name' => 'pd_queue',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \reVoizr\V1\Rest\Pd_queue\Pd_queueEntity::class,
            'collection_class' => \reVoizr\V1\Rest\Pd_queue\Pd_queueCollection::class,
            'service_name' => 'pd_queue',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'reVoizr\\V1\\Rest\\Pd_queue\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'reVoizr\\V1\\Rest\\Pd_queue\\Controller' => [
                0 => 'application/vnd.re-voizr.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'reVoizr\\V1\\Rest\\Pd_queue\\Controller' => [
                0 => 'application/vnd.re-voizr.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \reVoizr\V1\Rest\Pd_queue\Pd_queueEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 're-voizr.rest.pd_queue',
                'route_identifier_name' => 'pd_queue_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \reVoizr\V1\Rest\Pd_queue\Pd_queueCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 're-voizr.rest.pd_queue',
                'route_identifier_name' => 'pd_queue_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-content-validation' => [
        'reVoizr\\V1\\Rest\\Pd_queue\\Controller' => [
            'input_filter' => 'reVoizr\\V1\\Rest\\Pd_queue\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'reVoizr\\V1\\Rest\\Pd_queue\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'id',
                'description' => 'ID of queue entry',
                'field_type' => '',
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'param1',
            ],
        ],
    ],
];
