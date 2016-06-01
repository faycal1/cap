<?php

/**
 * Frontend Controllers
 */
get('/', 'FrontendController@index')->name('home');
get('macros', 'FrontendController@macros');
post('/cvs', 'CvController@store')->name('cv.store');
//get('/pdf/{id}', 'CvController@pdf')->name('cv.pdf');
get('/download/{id}', 'CvController@downloadPdf')->name('cv..download');

/**
 * These frontend controllers require the user to be logged in
 */
$router->group(['middleware' => 'auth'], function () {
    get('dashboard', 'DashboardController@index')->name('frontend.dashboard');
    get('profile/edit', 'ProfileController@edit')->name('frontend.profile.edit');
    patch('profile/update', 'ProfileController@update')->name('frontend.profile.update');
});
