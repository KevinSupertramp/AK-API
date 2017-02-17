<?php

$app->get('/', function () use ($app) {
    return redirect('api/v1');
});

$app->group(['prefix' => 'api'], function() use ($app) {

	$app->get('/', function () { return redirect('api/v1'); });

	$app->group(['prefix' => 'v1'], function() use ($app) {

		$app->get('/', function () { return 'AK-API V1'; });

		// AccountController
		$app->group(['prefix' => 'account'], function() use ($app)
		{
			$app->get('/{id}', ['uses' => 'AccountController@show']);
			$app->post('/', ['uses' => 'AccountController@create']);
			$app->patch('/', ['uses' => 'AccountController@update']);
			$app->delete('/{id}', ['uses' => 'AccountController@delete']);
		});

	});

});