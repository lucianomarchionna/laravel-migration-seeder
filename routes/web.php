<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'TravelController@listTravels')->name('home');
