<?php

    include('./route.php');


    // Route File
    // Route::method('url/{params}','controller@function');
    // Example:
    Route::get('/test', 'MainController@test');

    Route::get('/','MainController@index');
    Route::get('/{id}', 'MainController@get');