<?php

Route::resource('/painel/', 'ProfissionalController');
Route::get('painel/teste', 'ProfissionalController@teste');
//Route::get('/','SiteController@index');


/*Route::get('/users',function(){
    return " sdfs";
});
*/