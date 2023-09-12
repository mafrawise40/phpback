<?php

namespace App\Http\Controllers;

use App\Services\PessoaService;
use Illuminate\Http\JsonResponse;

class PessoaController  extends Controller{

    public function get(int $id): JsonResponse{

        $pessoaService = new PessoaService();

        return response()->json($pessoaService->findById($id));
    }

    public function getAll(): JsonResponse{

        $pessoaService = new PessoaService();

        return response()->json($pessoaService->getAll());
    }
}
