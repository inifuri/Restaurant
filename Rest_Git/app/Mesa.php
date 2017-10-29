<?php

namespace rest;

use rest\User;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model{

  protected $table = 'mesa';

  protected $fillable = ['id', 'estado', 'idGarzon'];

}
