<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\NoteController::index'], null, null, null, false, false, null]],
        '/matieres' => [[['_route' => 'matieres', '_controller' => 'App\\Controller\\NoteController::matieres'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/singleMatiere/\\{([^/]+)\\}(*:68)'
                .'|/note/remove/([^/]++)(*:96)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        68 => [[['_route' => 'singleMatiere', '_controller' => 'App\\Controller\\NoteController::singleMatiere'], ['id'], null, null, false, false, null]],
        96 => [
            [['_route' => 'remove', '_controller' => 'App\\Controller\\NoteController::removeMatiere'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
