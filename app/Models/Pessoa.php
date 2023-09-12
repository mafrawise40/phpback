<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model {


    protected $table = 'informe.tb_pessoa';
    protected $primaryKey = 'id_pessoa';
    protected $fillable = ['cpf', 'nome' , 'observacao' , 'rg'];

    public $timestamps = false; //remove o updated_at e created_at
}
?>