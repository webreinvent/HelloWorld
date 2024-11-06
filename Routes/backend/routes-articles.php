<?php

use VaahCms\Modules\HelloWorld\Http\Controllers\Backend\ArticlesController;

Route::group(
    [
        'prefix' => 'backend/helloworld/articles',
        
        'middleware' => ['web', 'has.backend.access'],
        
],
function () {
    /**
     * Get Assets
     */
    Route::get('/assets', [ArticlesController::class, 'getAssets'])
        ->name('vh.backend.helloworld.articles.assets');
    /**
     * Get List
     */
    Route::get('/', [ArticlesController::class, 'getList'])
        ->name('vh.backend.helloworld.articles.list');
    /**
     * Update List
     */
    Route::match(['put', 'patch'], '/', [ArticlesController::class, 'updateList'])
        ->name('vh.backend.helloworld.articles.list.update');
    /**
     * Delete List
     */
    Route::delete('/', [ArticlesController::class, 'deleteList'])
        ->name('vh.backend.helloworld.articles.list.delete');


    /**
     * Fill Form Inputs
     */
    Route::any('/fill', [ArticlesController::class, 'fillItem'])
        ->name('vh.backend.helloworld.articles.fill');

    /**
     * Create Item
     */
    Route::post('/', [ArticlesController::class, 'createItem'])
        ->name('vh.backend.helloworld.articles.create');
    /**
     * Get Item
     */
    Route::get('/{id}', [ArticlesController::class, 'getItem'])
        ->name('vh.backend.helloworld.articles.read');
    /**
     * Update Item
     */
    Route::match(['put', 'patch'], '/{id}', [ArticlesController::class, 'updateItem'])
        ->name('vh.backend.helloworld.articles.update');
    /**
     * Delete Item
     */
    Route::delete('/{id}', [ArticlesController::class, 'deleteItem'])
        ->name('vh.backend.helloworld.articles.delete');

    /**
     * List Actions
     */
    Route::any('/action/{action}', [ArticlesController::class, 'listAction'])
        ->name('vh.backend.helloworld.articles.list.actions');

    /**
     * Item actions
     */
    Route::any('/{id}/action/{action}', [ArticlesController::class, 'itemAction'])
        ->name('vh.backend.helloworld.articles.item.action');

    //---------------------------------------------------------

});
