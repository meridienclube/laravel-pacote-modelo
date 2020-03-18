<?php

// padrão
// Route::get('teste', 'PacoteModeloController@index');


Route::prefix('teste')
    ->middleware('web')
    ->namespace('MeridienClube/PacoteModelo/Controllers')
    ->group(function () {
        Route::resource('modelo', 'PacoteModeloController');
});

