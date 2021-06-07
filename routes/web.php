<?php

use Illuminate\Support\Facades\Route;
   

Auth::routes();   

Route::get('/home', 'myController@home')->name('home');        

Route::get('/pilot/show/{id}', 'myController@show')
-> name('show');   

Route::get('/car/carShow/{id}', 'myController@carShow')   
-> name('carShow');

Route::get('/car/create' , 'homeController@create')
    ->name('create'); 
    
Route::post('/car/stock' , 'homeController@stock')   
    ->name('stock'); 