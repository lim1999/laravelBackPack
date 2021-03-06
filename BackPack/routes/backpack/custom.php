<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('zone', 'ZoneCrudController');
    Route::crud('shape', 'ShapeCrudController');
    Route::crud('property-type', 'PropertyTypeCrudController');
    Route::crud('property-status', 'PropertyStatusCrudController');
    Route::crud('property', 'PropertyCrudController');
}); // this should be the absolute last line of this file