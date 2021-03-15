<?php

Route::group(['prefix'=> 'dashboard', 'name' => 'dashboard.'], function(){
    Route::get('check', 'DashboardController@index');
});
