<?php

namespace rest;

use rest\User;
use Illuminate\Database\Eloquent\Model;

class Detalle extends Model{

  protected $table = 'detalleProducto';

  protected $fillable = ['id','idCuenta','idPedido','idProducto','cantidad'];

}
