<?php

/**
 * Your package routes would go here
 */
Route::get('pesapal-callback',['as'=>'pesapal-callback', 'uses'=>'PesapalAPIController@handleCallback']);
Route::get('pesapal-ipn', ['as'=>'pesapal-ipn', 'uses'=>'PesapalAPIController@handleIPN']);