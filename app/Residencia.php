<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Residencia extends Eloquent {

    protected $collection = 'residencias';

    public function ubicacion(){
      return $this->embedsOne('App\Ubicacion');
    }

}
