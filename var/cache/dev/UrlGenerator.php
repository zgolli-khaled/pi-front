<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'registration' => [[], ['_controller' => 'App\\Controller\\SecurityController::registration'], [], [['text', '/registration']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/']], [], []],
    'login_success' => [[], ['_controller' => 'App\\Controller\\SecurityController::loginSuccess'], [], [['text', '/login_success']], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'activation' => [['token'], ['_controller' => 'App\\Controller\\SecurityController::activation'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/activation']], [], []],
    'oubliPass' => [[], ['_controller' => 'App\\Controller\\SecurityController::forgottenPass'], [], [['text', '/oubliPass']], [], []],
    'resetPassword' => [['token'], ['_controller' => 'App\\Controller\\SecurityController::resetPass'], [], [['variable', '', '[^/]++', 'token'], ['text', '/resetPassword']], [], []],
    'signUpJson' => [[], ['_controller' => 'App\\Controller\\SecurityController::signUpAction'], [], [['text', '/signUpJson']], [], []],
    'signInJson' => [[], ['_controller' => 'App\\Controller\\SecurityController::signInAction'], [], [['text', '/signInJson']], [], []],
    'editUserJson' => [[], ['_controller' => 'App\\Controller\\SecurityController::editUser'], [], [['text', '/editUserJson']], [], []],
    'oubliPassJSON' => [[], ['_controller' => 'App\\Controller\\SecurityController::forgottenPassJSON'], [], [['text', '/oubliPassJSON']], [], []],
    'resetPasswordJSON' => [['code', 'password'], ['_controller' => 'App\\Controller\\SecurityController::resetPassJSON'], [], [['variable', '/', '[^/]++', 'password'], ['variable', '/', '[^/]++', 'code'], ['text', '/resetPasswordJSON']], [], []],
    'showUserJson' => [[], ['_controller' => 'App\\Controller\\SecurityController::allUsersJson'], [], [['text', '/showUserJson']], [], []],
    'showUserTriNomJson' => [[], ['_controller' => 'App\\Controller\\SecurityController::allUsersTriNomJson'], [], [['text', '/showUserTriNomJson']], [], []],
    'showUserTriEmailJson' => [[], ['_controller' => 'App\\Controller\\SecurityController::allUsersTriEmailJson'], [], [['text', '/showUserTriEmailJson']], [], []],
    'blockUserJson' => [['id'], ['_controller' => 'App\\Controller\\SecurityController::blockUser'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/blockUserJson']], [], []],
    'unblockUserJson' => [['id'], ['_controller' => 'App\\Controller\\SecurityController::unblockUser'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/unblockUserJson']], [], []],
    'deleteUserJson' => [[], ['_controller' => 'App\\Controller\\SecurityController::deleteUserJson'], [], [['text', '/deleteUserJson']], [], []],
    'roleJson' => [[], ['_controller' => 'App\\Controller\\SecurityController::ModifierUser'], [], [['text', '/roleJson']], [], []],
    'updatePassJson' => [[], ['_controller' => 'App\\Controller\\SecurityController::updatePass'], [], [['text', '/updatePassJson']], [], []],
    'gregwar_captcha.generate_captcha' => [['key'], ['_controller' => 'Gregwar\\CaptchaBundle\\Controller\\CaptchaController::generateCaptchaAction'], [], [['variable', '/', '[^/]++', 'key'], ['text', '/_gcb/generate-captcha']], [], []],
];
