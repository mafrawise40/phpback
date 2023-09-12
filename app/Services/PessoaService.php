<?php

namespace App\Services;

use App\Models\Pessoa;
use Illuminate\Database\Eloquent\Collection;
use App\Services\AbstractService;

class PessoaService  extends AbstractService {

    public function findAll(): Collection{
        return Pessoa::get();
    }

    public function findById($id): Pessoa{
        $pessoa = Pessoa::find($id);
        if ( $pessoa == null) {
            return new Pessoa();
        }
        return $pessoa;
    }

    public function save($request) {

        $pessoa = Pessoa::create([
            "cpf" =>  $request->cpf,
            "nome" => $request->nome,
            "observacao"=> $request->observacao,
            "rg" => $request->rg
        ]);
       /* $pessoa = Pessoa::create(
            request()->all()
        );*/
        
        $pessoa->refresh();
        return $pessoa;
    }

    public function update($request, $id){
        $pessoa = Pessoa::find($id);
        $pessoa->cpf = $request->cpf;
        $pessoa->nome = $request->nome;
        $pessoa->rg = $request->rg;
        $pessoa->save();
        $pessoa->refresh();
        return $pessoa;
    }

    public function delete($id){
        $pessoa = Pessoa::find($id);
        $pessoa->delete();
        return true;
    }

   
}
