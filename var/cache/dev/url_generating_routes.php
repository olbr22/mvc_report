<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'metrics' => [[], ['_controller' => 'App\\Controller\\CodeQualityController::index'], [], [['text', '/metrics']], [], [], []],
    'game_doc' => [[], ['_controller' => 'App\\Controller\\GameController::documentation'], [], [['text', '/game/doc']], [], [], []],
    'game' => [[], ['_controller' => 'App\\Controller\\GameController::game'], [], [['text', '/game']], [], [], []],
    'game_init_get' => [[], ['_controller' => 'App\\Controller\\GameController::init'], [], [['text', '/game/init']], [], [], []],
    'game_init_post' => [[], ['_controller' => 'App\\Controller\\GameController::initCallback'], [], [['text', '/game/init']], [], [], []],
    'play' => [[], ['_controller' => 'App\\Controller\\GameController::play'], [], [['text', '/game/play']], [], [], []],
    'hit' => [[], ['_controller' => 'App\\Controller\\GameController::hit'], [], [['text', '/game/hit']], [], [], []],
    'stand' => [[], ['_controller' => 'App\\Controller\\GameController::stand'], [], [['text', '/game/stand']], [], [], []],
    'reset' => [[], ['_controller' => 'App\\Controller\\GameController::reset'], [], [['text', '/game/reset']], [], [], []],
    'api_game' => [[], ['_controller' => 'App\\Controller\\GameController::gameApi'], [], [['text', '/api/game']], [], [], []],
    'presentation' => [[], ['_controller' => 'App\\Controller\\Kmom01Controller::presentation'], [], [['text', '/']], [], [], []],
    'about' => [[], ['_controller' => 'App\\Controller\\Kmom01Controller::about'], [], [['text', '/about']], [], [], []],
    'report' => [[], ['_controller' => 'App\\Controller\\Kmom01Controller::report'], [], [['text', '/report']], [], [], []],
    'card' => [[], ['_controller' => 'App\\Controller\\Kmom02Controller::card'], [], [['text', '/card']], [], [], []],
    'card_deck' => [[], ['_controller' => 'App\\Controller\\Kmom02Controller::deck'], [], [['text', '/card/deck']], [], [], []],
    'deck_shuffle' => [[], ['_controller' => 'App\\Controller\\Kmom02Controller::deckShuffle'], [], [['text', '/card/deck/shuffle']], [], [], []],
    'draw_card' => [[], ['_controller' => 'App\\Controller\\Kmom02Controller::drawCard'], [], [['text', '/card/deck/draw']], [], [], []],
    'draw_num_cards' => [['num'], ['_controller' => 'App\\Controller\\Kmom02Controller::drawNumCards'], ['num' => '\\d+'], [['variable', '/', '\\d+', 'num', true], ['text', '/card/deck/draw']], [], [], []],
    'deal' => [['num_players', 'num_cards'], ['_controller' => 'App\\Controller\\Kmom02Controller::deal'], ['num_players' => '\\d+', 'num_cards' => '\\d+'], [['variable', '/', '\\d+', 'num_cards', true], ['variable', '/', '\\d+', 'num_players', true], ['text', '/card/deck/deal']], [], [], []],
    'api' => [[], ['_controller' => 'App\\Controller\\Kmom02ControllerJson::api'], [], [['text', '/api']], [], [], []],
    'lucky' => [[], ['_controller' => 'App\\Controller\\Kmom02ControllerJson::lucky'], [], [['text', '/lucky']], [], [], []],
    'quote' => [[], ['_controller' => 'App\\Controller\\Kmom02ControllerJson::jsonQuote'], [], [['text', '/api/quote']], [], [], []],
    'api_deck_create' => [[], ['_controller' => 'App\\Controller\\Kmom02ControllerJson::createDeck'], [], [['text', '/api/deck']], [], [], []],
    'api_deck_shuffle_get' => [[], ['_controller' => 'App\\Controller\\Kmom02ControllerJson::shuffleDeck'], [], [['text', '/api/deck/shuffle']], [], [], []],
    'api_deck_shuffle_post' => [[], ['_controller' => 'App\\Controller\\Kmom02ControllerJson::shuffleDeckCallback'], [], [['text', '/api/deck/shuffle']], [], [], []],
    'api_deck_draw_get' => [[], ['_controller' => 'App\\Controller\\Kmom02ControllerJson::drawGetCallback'], [], [['text', '/api/deck/draw/']], [], [], []],
    'api_deck_draw' => [[], ['_controller' => 'App\\Controller\\Kmom02ControllerJson::drawCallback'], [], [['text', '/api/deck/draw/']], [], [], []],
    'api_deck_draw_num_get' => [['num'], ['_controller' => 'App\\Controller\\Kmom02ControllerJson::drawNumGetCallback'], ['num' => '\\d+'], [['variable', '/', '\\d+', 'num', true], ['text', '/api/deck/draw']], [], [], []],
    'api_deck_draw_num_post' => [['num'], ['_controller' => 'App\\Controller\\Kmom02ControllerJson::drawNumPostCallback'], ['num' => '\\d+'], [['variable', '/', '\\d+', 'num', true], ['text', '/api/deck/draw']], [], [], []],
    'library' => [[], ['_controller' => 'App\\Controller\\LibraryController::index'], [], [['text', '/library']], [], [], []],
    'book_create_get' => [[], ['_controller' => 'App\\Controller\\LibraryController::showCreateBook'], [], [['text', '/library/book/create']], [], [], []],
    'book_create_post' => [[], ['_controller' => 'App\\Controller\\LibraryController::createBook'], [], [['text', '/library/book/create']], [], [], []],
    'book_by_id' => [['id'], ['_controller' => 'App\\Controller\\LibraryController::showBookById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/library/book/show']], [], [], []],
    'book_show_all' => [[], ['_controller' => 'App\\Controller\\LibraryController::showAllBook'], [], [['text', '/library/book/show']], [], [], []],
    'book_update_get' => [['id'], ['_controller' => 'App\\Controller\\LibraryController::showUpdateBook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/library/book/update']], [], [], []],
    'book_update_post' => [['id'], ['_controller' => 'App\\Controller\\LibraryController::updateBook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/library/book/update']], [], [], []],
    'book_delete_get' => [['id'], ['_controller' => 'App\\Controller\\LibraryController::showDeleteBook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/library/book/delete']], [], [], []],
    'book_delete_by_id' => [['id'], ['_controller' => 'App\\Controller\\LibraryController::deleteBookById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/library/book/delete']], [], [], []],
    'api_book_show_all' => [[], ['_controller' => 'App\\Controller\\LibraryControllerJson::apiShowAll'], [], [['text', '/api/library/books']], [], [], []],
    'api_book_show_isbn' => [['isbn'], ['_controller' => 'App\\Controller\\LibraryControllerJson::apiShowBookByIsbn'], [], [['variable', '/', '[^/]++', 'isbn', true], ['text', '/api/library/book']], [], [], []],
    'app_product' => [[], ['_controller' => 'App\\Controller\\ProductController::index'], [], [['text', '/product']], [], [], []],
    'product_create' => [[], ['_controller' => 'App\\Controller\\ProductController::createProduct'], [], [['text', '/product/create']], [], [], []],
    'product_show_all' => [[], ['_controller' => 'App\\Controller\\ProductController::showAllProduct'], [], [['text', '/product/show']], [], [], []],
    'product_by_id' => [['id'], ['_controller' => 'App\\Controller\\ProductController::showProductById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/product/show']], [], [], []],
    'product_delete_by_id' => [['id'], ['_controller' => 'App\\Controller\\ProductController::deleteProductById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/product/delete']], [], [], []],
    'product_update' => [['id', 'value'], ['_controller' => 'App\\Controller\\ProductController::updateProduct'], [], [['variable', '/', '[^/]++', 'value', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/product/update']], [], [], []],
    'project' => [[], ['_controller' => 'App\\Controller\\SustainabilityController::index'], [], [['text', '/proj']], [], [], []],
    'sustainability' => [[], ['_controller' => 'App\\Controller\\SustainabilityController::about'], [], [['text', '/proj/about']], [], [], []],
    'textile' => [[], ['_controller' => 'App\\Controller\\SustainabilityController::getTextileConsumptionData'], [], [['text', '/proj/textile']], [], [], []],
    'food' => [[], ['_controller' => 'App\\Controller\\SustainabilityController::getFoodWasteData'], [], [['text', '/proj/food']], [], [], []],
    'app_textile_consumption' => [[], ['_controller' => 'App\\Controller\\TextileConsumptionController::index'], [], [['text', '/textile/consumption']], [], [], []],
    'textile_consumption_add' => [[], ['_controller' => 'App\\Controller\\TextileConsumptionController::addFieldToTextileConsumption'], [], [['text', '/textile/consumption/add']], [], [], []],
];