<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;

//Route::get("/pessoas" , [PessoaController::class , 'index']);

route::controller(PessoaController::class)->group(function(){
    route::get("/pessoas/{id}" , "get");
    route::get("/pessoas" , "getAll");
});

/*
Route::controller(PessoaController::class)->group(function () {
    Route::get('/pessoas', 'get');
});*/


//Route::get('/pessoas', [PessoaController::class, 'get']);
