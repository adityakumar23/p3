<?php

/*
==============================
This is the routes file with routes for
1.) homepage
2.) loremipsum generator
3.) user generator
4.) page for displaying lorem ipsum text
5.) page for displaying users
==============================
*/

Route::group(['middleware' => ['web']], function () {
    //

    Route::get('/', 'LoremipsumController@getIndex');
    Route::get('/loremipsum', 'LoremipsumController@getText');
    Route::post('/loremipsum','LoremipsumController@postText');
    Route::get('/usergenerator', 'LoremipsumController@getUser');
    Route::post('/usergenerator', 'LoremipsumController@postUser');
});
