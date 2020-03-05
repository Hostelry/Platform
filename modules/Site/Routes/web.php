<?php

use CodingMatters\Site\Http\Controllers\Page\Index;
use CodingMatters\Site\Http\Controllers\Plans\ComparePlans;

Route::get('/', Index::class)->name('index');

Route::group(['prefix' => 'plans'], function () {
    Route::get('/', ComparePlans::class)->name('plans');

    Route::get('/starter', function() {})->name('plans.starter');
    Route::get('/expansion', function() {})->name('plans.expansion');
    Route::get('/deluxe', function() {})->name('plans.deluxe');
});