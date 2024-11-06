<?php
use VaahCms\Modules\HelloWorld\Http\Controllers\Backend\ArticlesController;
/*
 * API url will be: <base-url>/public/api/helloworld/articles
 */
Route::group(
    [
        'prefix' => 'helloworld/articles',
        'namespace' => 'Backend',
    ],
function () {

    /**
     * Get Assets
     */
    Route::get('/assets', [ArticlesController::class, 'getAssets'])
        ->name('vh.backend.helloworld.api.articles.assets');
    /**
     * Get List
     */
    Route::get('/', [ArticlesController::class, 'getList'])
        ->name('vh.backend.helloworld.api.articles.list');
    /**
     * Update List
     */
    Route::match(['put', 'patch'], '/', [ArticlesController::class, 'updateList'])
        ->name('vh.backend.helloworld.api.articles.list.update');
    /**
     * Delete List
     */
    Route::delete('/', [ArticlesController::class, 'deleteList'])
        ->name('vh.backend.helloworld.api.articles.list.delete');


    /**
     * Create Item
     */
    Route::post('/', [ArticlesController::class, 'createItem'])
        ->name('vh.backend.helloworld.api.articles.create');
    /**
     * Get Item
     */
    Route::get('/{id}', [ArticlesController::class, 'getItem'])
        ->name('vh.backend.helloworld.api.articles.read');
    /**
     * Update Item
     */
    Route::match(['put', 'patch'], '/{id}', [ArticlesController::class, 'updateItem'])
        ->name('vh.backend.helloworld.api.articles.update');
    /**
     * Delete Item
     */
    Route::delete('/{id}', [ArticlesController::class, 'deleteItem'])
        ->name('vh.backend.helloworld.api.articles.delete');

    /**
     * List Actions
     */
    Route::any('/action/{action}', [ArticlesController::class, 'listAction'])
        ->name('vh.backend.helloworld.api.articles.list.action');

    /**
     * Item actions
     */
    Route::any('/{id}/action/{action}', [ArticlesController::class, 'itemAction'])
        ->name('vh.backend.helloworld.api.articles.item.action');



});
