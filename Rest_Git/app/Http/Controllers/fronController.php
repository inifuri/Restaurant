<?php

namespace rest\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\SweetAlertServiceProvider;
class fronController extends Controller
{

    public function index(){
      return view('auth.login');
    }
  //  public function admin(){
   //   return view('admin.index');
   // }
   
}
