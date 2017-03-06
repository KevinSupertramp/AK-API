<?php

$app->get('/', function () use ($app) {
    return redirect('api/v1');
});

$app->group(['prefix' => 'api', 'middleware' => 'App\Http\Middleware\FormatJsonResponse'], function() use ($app) {

	$app->get('/', function () { return redirect('api/v1'); });

	$app->group(['prefix' => 'v1'], function() use ($app) {

		$app->get('/', function () { return response()->json('AK-API V1'); });

		// Require routes
		require(__DIR__ . '/account.api.php');

	});

});