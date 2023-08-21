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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/metrics' => [[['_route' => 'metrics', '_controller' => 'App\\Controller\\CodeQualityController::index'], null, null, null, false, false, null]],
        '/game/doc' => [[['_route' => 'game_doc', '_controller' => 'App\\Controller\\GameController::documentation'], null, null, null, false, false, null]],
        '/game' => [[['_route' => 'game', '_controller' => 'App\\Controller\\GameController::game'], null, null, null, false, false, null]],
        '/game/init' => [
            [['_route' => 'game_init_get', '_controller' => 'App\\Controller\\GameController::init'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'game_init_post', '_controller' => 'App\\Controller\\GameController::initCallback'], null, ['POST' => 0], null, false, false, null],
        ],
        '/game/play' => [[['_route' => 'play', '_controller' => 'App\\Controller\\GameController::play'], null, ['GET' => 0], null, false, false, null]],
        '/game/hit' => [[['_route' => 'hit', '_controller' => 'App\\Controller\\GameController::hit'], null, ['POST' => 0], null, false, false, null]],
        '/game/stand' => [[['_route' => 'stand', '_controller' => 'App\\Controller\\GameController::stand'], null, ['POST' => 0], null, false, false, null]],
        '/game/reset' => [[['_route' => 'reset', '_controller' => 'App\\Controller\\GameController::reset'], null, ['POST' => 0], null, false, false, null]],
        '/api/game' => [[['_route' => 'api_game', '_controller' => 'App\\Controller\\GameController::gameApi'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'presentation', '_controller' => 'App\\Controller\\Kmom01Controller::presentation'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\Kmom01Controller::about'], null, null, null, false, false, null]],
        '/report' => [[['_route' => 'report', '_controller' => 'App\\Controller\\Kmom01Controller::report'], null, null, null, false, false, null]],
        '/card' => [[['_route' => 'card', '_controller' => 'App\\Controller\\Kmom02Controller::card'], null, null, null, false, false, null]],
        '/card/deck' => [[['_route' => 'card_deck', '_controller' => 'App\\Controller\\Kmom02Controller::deck'], null, ['GET' => 0], null, false, false, null]],
        '/card/deck/shuffle' => [[['_route' => 'deck_shuffle', '_controller' => 'App\\Controller\\Kmom02Controller::deckShuffle'], null, null, null, false, false, null]],
        '/card/deck/draw' => [[['_route' => 'draw_card', '_controller' => 'App\\Controller\\Kmom02Controller::drawCard'], null, null, null, false, false, null]],
        '/api' => [[['_route' => 'api', '_controller' => 'App\\Controller\\Kmom02ControllerJson::api'], null, null, null, false, false, null]],
        '/lucky' => [[['_route' => 'lucky', '_controller' => 'App\\Controller\\Kmom02ControllerJson::lucky'], null, null, null, false, false, null]],
        '/api/quote' => [[['_route' => 'quote', '_controller' => 'App\\Controller\\Kmom02ControllerJson::jsonQuote'], null, null, null, false, false, null]],
        '/api/deck' => [[['_route' => 'api_deck_create', '_controller' => 'App\\Controller\\Kmom02ControllerJson::createDeck'], null, ['GET' => 0], null, false, false, null]],
        '/api/deck/shuffle' => [
            [['_route' => 'api_deck_shuffle_get', '_controller' => 'App\\Controller\\Kmom02ControllerJson::shuffleDeck'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_deck_shuffle_post', '_controller' => 'App\\Controller\\Kmom02ControllerJson::shuffleDeckCallback'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/deck/draw' => [
            [['_route' => 'api_deck_draw_get', '_controller' => 'App\\Controller\\Kmom02ControllerJson::drawGetCallback'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'api_deck_draw', '_controller' => 'App\\Controller\\Kmom02ControllerJson::drawCallback'], null, ['POST' => 0], null, true, false, null],
        ],
        '/library' => [[['_route' => 'library', '_controller' => 'App\\Controller\\LibraryController::index'], null, null, null, false, false, null]],
        '/library/book/create' => [
            [['_route' => 'book_create_get', '_controller' => 'App\\Controller\\LibraryController::showCreateBook'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'book_create_post', '_controller' => 'App\\Controller\\LibraryController::createBook'], null, ['POST' => 0], null, false, false, null],
        ],
        '/library/book/show' => [[['_route' => 'book_show_all', '_controller' => 'App\\Controller\\LibraryController::showAllBook'], null, null, null, false, false, null]],
        '/api/library/books' => [[['_route' => 'api_book_show_all', '_controller' => 'App\\Controller\\LibraryControllerJson::apiShowAll'], null, null, null, false, false, null]],
        '/product' => [[['_route' => 'app_product', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/product/create' => [[['_route' => 'product_create', '_controller' => 'App\\Controller\\ProductController::createProduct'], null, null, null, false, false, null]],
        '/product/show' => [[['_route' => 'product_show_all', '_controller' => 'App\\Controller\\ProductController::showAllProduct'], null, null, null, false, false, null]],
        '/proj' => [[['_route' => 'project', '_controller' => 'App\\Controller\\SustainabilityController::index'], null, null, null, false, false, null]],
        '/proj/about' => [[['_route' => 'sustainability', '_controller' => 'App\\Controller\\SustainabilityController::about'], null, null, null, false, false, null]],
        '/proj/textile' => [[['_route' => 'textile', '_controller' => 'App\\Controller\\SustainabilityController::getTextileConsumptionData'], null, null, null, false, false, null]],
        '/proj/food' => [[['_route' => 'food', '_controller' => 'App\\Controller\\SustainabilityController::getFoodWasteData'], null, null, null, false, false, null]],
        '/textile/consumption' => [[['_route' => 'app_textile_consumption', '_controller' => 'App\\Controller\\TextileConsumptionController::index'], null, null, null, false, false, null]],
        '/textile/consumption/add' => [[['_route' => 'textile_consumption_add', '_controller' => 'App\\Controller\\TextileConsumptionController::addFieldToTextileConsumption'], null, null, null, false, false, null]],
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
                .'|/card/deck/d(?'
                    .'|raw/(\\d+)(*:193)'
                    .'|eal/(\\d+)/(\\d+)(*:216)'
                .')'
                .'|/api/(?'
                    .'|deck/draw/(\\d+)(?'
                        .'|(*:251)'
                    .')'
                    .'|library/book/([^/]++)(*:281)'
                .')'
                .'|/library/book/(?'
                    .'|show/([^/]++)(*:320)'
                    .'|update/([^/]++)(?'
                        .'|(*:346)'
                    .')'
                    .'|delete/([^/]++)(?'
                        .'|(*:373)'
                    .')'
                .')'
                .'|/product/(?'
                    .'|show/([^/]++)(*:408)'
                    .'|delete/([^/]++)(*:431)'
                    .'|update/([^/]++)/([^/]++)(*:463)'
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
        193 => [[['_route' => 'draw_num_cards', '_controller' => 'App\\Controller\\Kmom02Controller::drawNumCards'], ['num'], null, null, false, true, null]],
        216 => [[['_route' => 'deal', '_controller' => 'App\\Controller\\Kmom02Controller::deal'], ['num_players', 'num_cards'], null, null, false, true, null]],
        251 => [
            [['_route' => 'api_deck_draw_num_get', '_controller' => 'App\\Controller\\Kmom02ControllerJson::drawNumGetCallback'], ['num'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_deck_draw_num_post', '_controller' => 'App\\Controller\\Kmom02ControllerJson::drawNumPostCallback'], ['num'], ['POST' => 0], null, false, true, null],
        ],
        281 => [[['_route' => 'api_book_show_isbn', '_controller' => 'App\\Controller\\LibraryControllerJson::apiShowBookByIsbn'], ['isbn'], null, null, false, true, null]],
        320 => [[['_route' => 'book_by_id', '_controller' => 'App\\Controller\\LibraryController::showBookById'], ['id'], null, null, false, true, null]],
        346 => [
            [['_route' => 'book_update_get', '_controller' => 'App\\Controller\\LibraryController::showUpdateBook'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'book_update_post', '_controller' => 'App\\Controller\\LibraryController::updateBook'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        373 => [
            [['_route' => 'book_delete_get', '_controller' => 'App\\Controller\\LibraryController::showDeleteBook'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'book_delete_by_id', '_controller' => 'App\\Controller\\LibraryController::deleteBookById'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        408 => [[['_route' => 'product_by_id', '_controller' => 'App\\Controller\\ProductController::showProductById'], ['id'], null, null, false, true, null]],
        431 => [[['_route' => 'product_delete_by_id', '_controller' => 'App\\Controller\\ProductController::deleteProductById'], ['id'], null, null, false, true, null]],
        463 => [
            [['_route' => 'product_update', '_controller' => 'App\\Controller\\ProductController::updateProduct'], ['id', 'value'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
