<?php

$app->group(['prefix' => 'account'], function() use ($app)
{
	$app->get('/{id}', ['uses' => 'AccountController@show']);
	$app->post('/', ['uses' => 'AccountController@create']);
	$app->patch('/', ['uses' => 'AccountController@update']);
	$app->delete('/{id}', ['uses' => 'AccountController@delete']);
});