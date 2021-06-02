<?php
use Illuminate\Support\Facades\Route;

// Route::get('greeting', function () {
//     return 'Hi, this is your awesome package! Mcqp';
// });

// Route::get('picmatch/test', 'EdgeWizz\Picmatch\Controllers\PicmatchController@test')->name('test');

Route::post('fmt/mcqp/store', 'EdgeWizz\Mcqp\Controllers\McqpController@store')->name('fmt.mcqp.store');

Route::post('fmt/mcqp/update/{id}', 'EdgeWizz\Mcqp\Controllers\McqpController@update')->name('fmt.mcqp.update');

Route::post('fmt/mcqp/csv_upload', 'EdgeWizz\Mcqp\Controllers\McqpController@csv_upload')->name('fmt.mcqp.csv');

Route::any('fmt/mcqp/delete/{id}', 'EdgeWizz\Mcqp\Controllers\McqpController@delete')->name('fmt.mcqp.delete');
