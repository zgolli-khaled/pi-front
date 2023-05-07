<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/registration' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/login_success' => [[['_route' => 'login_success', '_controller' => 'App\\Controller\\SecurityController::loginSuccess'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/oubliPass' => [[['_route' => 'oubliPass', '_controller' => 'App\\Controller\\SecurityController::forgottenPass'], null, null, null, false, false, null]],
        '/signUpJson' => [[['_route' => 'signUpJson', '_controller' => 'App\\Controller\\SecurityController::signUpAction'], null, null, null, false, false, null]],
        '/signInJson' => [[['_route' => 'signInJson', '_controller' => 'App\\Controller\\SecurityController::signInAction'], null, null, null, false, false, null]],
        '/editUserJson' => [[['_route' => 'editUserJson', '_controller' => 'App\\Controller\\SecurityController::editUser'], null, null, null, false, false, null]],
        '/oubliPassJSON' => [[['_route' => 'oubliPassJSON', '_controller' => 'App\\Controller\\SecurityController::forgottenPassJSON'], null, null, null, false, false, null]],
        '/showUserJson' => [[['_route' => 'showUserJson', '_controller' => 'App\\Controller\\SecurityController::allUsersJson'], null, null, null, false, false, null]],
        '/showUserTriNomJson' => [[['_route' => 'showUserTriNomJson', '_controller' => 'App\\Controller\\SecurityController::allUsersTriNomJson'], null, null, null, false, false, null]],
        '/showUserTriEmailJson' => [[['_route' => 'showUserTriEmailJson', '_controller' => 'App\\Controller\\SecurityController::allUsersTriEmailJson'], null, null, null, false, false, null]],
        '/deleteUserJson' => [[['_route' => 'deleteUserJson', '_controller' => 'App\\Controller\\SecurityController::deleteUserJson'], null, null, null, false, false, null]],
        '/roleJson' => [[['_route' => 'roleJson', '_controller' => 'App\\Controller\\SecurityController::ModifierUser'], null, null, null, false, false, null]],
        '/updatePassJson' => [[['_route' => 'updatePassJson', '_controller' => 'App\\Controller\\SecurityController::updatePass'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                    .'|gcb/generate\\-captcha/([^/]++)(*:198)'
                .')'
                .'|/activation/([^/]++)(*:227)'
                .'|/resetPassword(?'
                    .'|([^/]++)(*:260)'
                    .'|JSON/([^/]++)/([^/]++)(*:290)'
                .')'
                .'|/blockUserJson/([^/]++)(*:322)'
                .'|/unblockUserJson/([^/]++)(*:355)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        198 => [[['_route' => 'gregwar_captcha.generate_captcha', '_controller' => 'Gregwar\\CaptchaBundle\\Controller\\CaptchaController::generateCaptchaAction'], ['key'], null, null, false, true, null]],
        227 => [[['_route' => 'activation', '_controller' => 'App\\Controller\\SecurityController::activation'], ['token'], null, null, false, true, null]],
        260 => [[['_route' => 'resetPassword', '_controller' => 'App\\Controller\\SecurityController::resetPass'], ['token'], null, null, false, true, null]],
        290 => [[['_route' => 'resetPasswordJSON', '_controller' => 'App\\Controller\\SecurityController::resetPassJSON'], ['code', 'password'], null, null, false, true, null]],
        322 => [[['_route' => 'blockUserJson', '_controller' => 'App\\Controller\\SecurityController::blockUser'], ['id'], null, null, false, true, null]],
        355 => [
            [['_route' => 'unblockUserJson', '_controller' => 'App\\Controller\\SecurityController::unblockUser'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
