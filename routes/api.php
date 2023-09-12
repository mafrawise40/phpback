<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;
route::controller(PessoaController::class)->group(function(){
    route::get("/pessoas/{id}" , "get");
    route::get("/pessoas" , "getAll");
    route::post("/pessoas" , "save");
    route::put("/pessoas/{id}" , "update");
    route::delete("/pessoas/{id}" , "delete");
});

