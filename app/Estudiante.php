<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Estudiante extends Eloquent {

    protected $collection = 'estudiantes';

}