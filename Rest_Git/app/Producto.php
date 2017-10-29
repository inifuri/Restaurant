<?php

namespace rest;

use rest\User;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model{

  protected $table = 'producto';

  protected $fillable = ['id','nombre','precio','estado'];

}
