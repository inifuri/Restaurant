<?php

namespace rest;

use rest\User;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model{

  protected $table = 'cuenta';

  protected $fillable = ['id','idGarzon','idMesa','fecha'];

}
