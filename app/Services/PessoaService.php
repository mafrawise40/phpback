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
        return Pessoa::find($id);
    }

    public function save($entity) {

    }

    public function update($entity){

    }

    public function delete($id){

    }

   
}
