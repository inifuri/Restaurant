<?php

namespace rest\Http\Controllers;

use rest\User;
use Illuminate\Http\Request;
use rest\Http\Requests\UserUpdateRequest;
use rest\Http\Requests\UserCreateRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $usuarios = new User;
      $usuarios = User::all();
      return view('usuarios.index')->with('usuarios',$usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $usuario = new User;
      return view('usuarios.create')->with('usuario',$usuario);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {
      $usuario = User::create([
          'username' => $data['username'],
          'password' => bcrypt($data['password']),
          'nombres' => $data['nombres'],
          'apellidos' => $data['apellidos'],
          'email' => $data['email'],
          'categoria' => $data['categoria'],

      ]);
      //$usuario = new User;
      //$usuario->fill( $request->only('id','username','nombres','apellidos', \Hash::make('password'), 'email', 'categoria') );
      $usuario->save();
      session()->flash('message','Usuario Creado!');
      return redirect()->route('usuarios_path');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $usuario)
    {
        return view('usuarios.edit')->with(['usuario' => $usuario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($usuario, UserUpdateRequest $request)
    {
      $usuario = User::find($usuario);
      $usuario->fill( $request->only('id','username','nombres','apellidos', 'email', 'categoria') );
      $usuario->save();
      session()->flash('message','Usuario Modificado!');
      return redirect()->route('usuarios_path');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $usuario = User::find($id);
      $usuario->delete();
      session()->flash('message','Usuario Eliminado!');
      return redirect()->route('usuarios_path');
    }
}
