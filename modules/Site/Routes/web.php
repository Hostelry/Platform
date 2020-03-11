<?php

use CodingMatters\Site\Http\Controllers\Page\Index;
use CodingMatters\Site\Http\Controllers\Plans\ComparePlans;
use CodingMatters\Site\Http\Controllers\Plans\StarterPlan;
use CodingMatters\Site\Http\Controllers\Subscribe;

Route::get('/', Index::class)->name('index');

Route::group(['prefix' => 'plans'], function () {
    Route::get('/', ComparePlans::class)->name('plans');

    Route::get('/starter', StarterPlan::class)->name('plans.starter');
    Route::post('/starter', Subscribe::class)->name('subscribe');

    Route::get('/expansion', function() {})->name('plans.expansion');
    Route::get('/deluxe', function() {})->name('plans.deluxe');

});

Route::get('account/dashboard', function() {})->name('account.dashboard');
