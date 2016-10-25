<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/ 

// Route::pach('notes/{note}','NotesController@edit');

Route::group(['middlewere'=>['web']], function(){
    Route::get('notes/{note}/edit','NotesController@edit');
Route::post('cards/{card}/notes','NotesController@addNewNote');
Route::get('cards','CardsController@index');
Route::get('cards/{card}','CardsController@show');
Route::get('page_data','PageController@controllerCheck');

Route::patch('notes/{note}','NotesController@update');
    
});
 
//
//Route::get('about', function () {
//    return 'THis is about string ';
//});
//Route::get('terms_and_condination', function () {
//    return view('pages.TermsAndCondination');
//});
//
//Route::get('pass_data', function () {
//     $people = ['Raju ','kaju','Batatasa','Dummy'];
//       //$people = [];
//  
//    return view('pages.pass_data',  compact('people'));
//});

