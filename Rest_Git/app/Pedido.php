<?php

namespace rest;

use rest\User;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model{

  protected $table = 'pedido';

  protected $fillable = ['id','idGarzon','idMesa','estado'];

}
