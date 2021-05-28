<?php


use Illuminate\Support\Facades\Route;

use Husnet\OmegaPlugin\BS5Card\Http\Controllers\Admin\PluginController;

Route::prefix('admin/plugins/card')->group(function() {

    Route::get('/', [PluginController::class, 'index']);

});