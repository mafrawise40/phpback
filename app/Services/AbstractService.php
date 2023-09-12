<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractService {

   abstract protected function save($entity);
   abstract protected function findById($id): Model;
   abstract protected function findAll();
   abstract protected function update($entity);
   abstract protected function delete($id);

}




?>