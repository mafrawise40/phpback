<?php

namespace App\Http\Controllers;

use App\Services\PessoaService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PessoaController  extends Controller{

    public function get(int $id): JsonResponse{
        $pessoaService = new PessoaService();
        return response()->json($pessoaService->findById($id));
    }

    public function getAll(): JsonResponse{
        $pessoaService = new PessoaService();
        return response()->json($pessoaService->findAll());
    }

    public function save(Request $request): JsonResponse{
       $pessoaService = new PessoaService();
       return response()->json($pessoaService->save($request));
    }

    public function update(Request $request , int $id): JsonResponse{
        $pessoaService = new PessoaService();
        return response()->json($pessoaService->update($request , $id));
     }

     public function delete(int $id): JsonResponse{
        $pessoaService = new PessoaService();
        return response()->json($pessoaService->delete($id));
     }
}
