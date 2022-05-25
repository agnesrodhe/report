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
        '/book' => [[['_route' => 'app_book', '_controller' => 'App\\Controller\\BookController::index'], null, null, null, false, false, null]],
        '/book/create' => [[['_route' => 'create_book', '_controller' => 'App\\Controller\\BookController::createBook'], null, null, null, false, false, null]],
        '/book/show' => [[['_route' => 'show', '_controller' => 'App\\Controller\\BookController::showLibrary'], null, null, null, false, false, null]],
        '/book/showBooks' => [[['_route' => 'show_all_books', '_controller' => 'App\\Controller\\BookController::showBooks'], null, null, null, false, false, null]],
        '/card' => [[['_route' => 'card', '_controller' => 'App\\Controller\\CardController::card'], null, null, null, false, false, null]],
        '/card/deck' => [[['_route' => 'showDeck', '_controller' => 'App\\Controller\\CardController::showDeck'], null, null, null, false, false, null]],
        '/card/deck2' => [[['_route' => 'showDeck2', '_controller' => 'App\\Controller\\CardController::showDeck2'], null, null, null, false, false, null]],
        '/card/deck/shuffle' => [[['_route' => 'shuffleDeck', '_controller' => 'App\\Controller\\CardController::shuffleDeck'], null, null, null, false, false, null]],
        '/card/deck/draw' => [[['_route' => 'draw-card', '_controller' => 'App\\Controller\\CardController::drawCard'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dice' => [[['_route' => 'dice-home', '_controller' => 'App\\Controller\\DiceController::home'], null, null, null, false, false, null]],
        '/dice/graphic' => [[['_route' => 'dice-graphic-home', '_controller' => 'App\\Controller\\DiceGraphicController::home'], null, null, null, false, false, null]],
        '/dice/hand' => [
            [['_route' => 'dice-hand-home', '_controller' => 'App\\Controller\\DiceHandController::home'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null],
            [['_route' => 'dice-hand-process', '_controller' => 'App\\Controller\\DiceHandController::process'], null, ['POST' => 0], null, false, false, null],
        ],
        '/form/login' => [
            [['_route' => 'form-login', '_controller' => 'App\\Controller\\FormLoginController::login'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null],
            [['_route' => 'form-login-process', '_controller' => 'App\\Controller\\FormLoginController::loginProcess'], null, ['POST' => 0], null, false, false, null],
        ],
        '/form/search' => [[['_route' => 'form-search', '_controller' => 'App\\Controller\\FormSearchController::search'], null, null, null, false, false, null]],
        '/form/session' => [
            [['_route' => 'form-session', '_controller' => 'App\\Controller\\FormSessionController::session'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null],
            [['_route' => 'form-session-process', '_controller' => 'App\\Controller\\FormSessionController::sessionProcess'], null, ['POST' => 0], null, false, false, null],
        ],
        '/game' => [[['_route' => 'game', '_controller' => 'App\\Controller\\GameController::game'], null, null, null, false, false, null]],
        '/game/doc' => [[['_route' => 'game-doc', '_controller' => 'App\\Controller\\GameController::gameDoc'], null, null, null, false, false, null]],
        '/game/start' => [[['_route' => 'game-start', '_controller' => 'App\\Controller\\GameController::gameStart'], null, null, null, false, false, null]],
        '/game/draw' => [[['_route' => 'game-draw', '_controller' => 'App\\Controller\\GameController::gameDraw'], null, null, null, false, false, null]],
        '/game/stop' => [[['_route' => 'game-stop', '_controller' => 'App\\Controller\\GameController::gameStop'], null, null, null, false, false, null]],
        '/card/api/deck' => [[['_route' => 'json-api', '_controller' => 'App\\Controller\\JsonApiController::deckJson'], null, null, null, false, false, null]],
        '/product' => [[['_route' => 'app_product', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/product/create' => [[['_route' => 'create_product', '_controller' => 'App\\Controller\\ProductController::createProduct'], null, null, null, false, false, null]],
        '/product/show' => [[['_route' => 'product_show_all', '_controller' => 'App\\Controller\\ProductController::showAllProduct'], null, null, null, false, false, null]],
        '/proj' => [[['_route' => 'proj', '_controller' => 'App\\Controller\\ProjectController::proj'], null, null, null, false, false, null]],
        '/proj/about' => [[['_route' => 'about-proj', '_controller' => 'App\\Controller\\ProjectController::aboutProj'], null, null, null, false, false, null]],
        '/proj/reset' => [[['_route' => 'reset-proj', '_controller' => 'App\\Controller\\ProjectController::resetProj'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\ReportController::home'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\ReportController::about'], null, null, null, false, false, null]],
        '/report' => [[['_route' => 'report', '_controller' => 'App\\Controller\\ReportController::report'], null, null, null, false, false, null]],
        '/metrics' => [[['_route' => 'metrics', '_controller' => 'App\\Controller\\ReportController::metrics'], null, null, null, false, false, null]],
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
                .')'
                .'|/book/(?'
                    .'|show/([^/]++)(*:191)'
                    .'|delete/([^/]++)(*:214)'
                    .'|update(?'
                        .'|Book/([^/]++)(*:244)'
                        .'|/([^/]++)(*:261)'
                    .')'
                .')'
                .'|/card/deck/d(?'
                    .'|raw/([^/]++)(*:298)'
                    .'|eal/([^/]++)/([^/]++)(*:327)'
                .')'
                .'|/dice/(?'
                    .'|roll/([^/]++)(*:358)'
                    .'|grahpic/roll/([^/]++)(*:387)'
                .')'
                .'|/product/(?'
                    .'|show/([^/]++)(*:421)'
                    .'|delete/([^/]++)(*:444)'
                    .'|update/([^/]++)/([^/]++)(*:476)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        191 => [[['_route' => 'book_by_id', '_controller' => 'App\\Controller\\BookController::showBookById'], ['bookId'], null, null, false, true, null]],
        214 => [[['_route' => 'book_delete_by_id', '_controller' => 'App\\Controller\\BookController::deleteBookById'], ['bookId'], null, null, false, true, null]],
        244 => [[['_route' => 'update_book', '_controller' => 'App\\Controller\\BookController::showUpdateBook'], ['bookId'], null, null, false, true, null]],
        261 => [[['_route' => 'book_update_by_id', '_controller' => 'App\\Controller\\BookController::updateBook'], ['bookId'], null, null, false, true, null]],
        298 => [[['_route' => 'draw-card-number', '_controller' => 'App\\Controller\\CardController::drawCardNumber'], ['numberCards'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        327 => [[['_route' => 'deal-cards', '_controller' => 'App\\Controller\\CardController::dealCards'], ['players', 'cards'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        358 => [[['_route' => 'dice-roll', '_controller' => 'App\\Controller\\DiceController::roll'], ['numRolls'], null, null, false, true, null]],
        387 => [[['_route' => 'dice-graphic-roll', '_controller' => 'App\\Controller\\DiceGraphicController::roll'], ['numRolls'], null, null, false, true, null]],
        421 => [[['_route' => 'product_by_id', '_controller' => 'App\\Controller\\ProductController::showProductById'], ['productId'], null, null, false, true, null]],
        444 => [[['_route' => 'product_delete_by_id', '_controller' => 'App\\Controller\\ProductController::deleteProductById'], ['productId'], null, null, false, true, null]],
        476 => [
            [['_route' => 'product_update', '_controller' => 'App\\Controller\\ProductController::updateProduct'], ['productId', 'value'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
