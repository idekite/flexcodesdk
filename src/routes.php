<?php

/**
 * @Author: Feri Harjulianto
 * @Date:   2018-09-05 09:48:54
 * @Last Modified by:   Feri Harjulianto
 * @Last Modified time: 2018-09-05 10:29:57
 */

Route::group(['namespace' => 'idekite\flexcodesdk\Controllers'], function()
{
    Route::get('test', ['uses' => 'flexcodeSDKController@index']);

    Route::prefix('fingerprints')->group(function () {
	    Route::get('/', function () {
	        echo "hello world";
	    });

	    Route::get('test/controller', ['uses' => 'flexcodeSDKController@test_controller']);
	    Route::get('test/facade', ['uses' => 'flexcodeSDKController@test_facade']);
	});
});