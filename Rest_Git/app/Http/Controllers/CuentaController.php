<?php

namespace rest\Http\Controllers;

use rest\Cuenta;
use Illuminate\Http\Request;
use rest\Http\Requests\UpdateCuentaRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class CuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cuentas = new Cuenta;
      $cuentas = Cuenta::all();
      return view('cuentas.index')->with('cuentas',$cuentas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $cuenta = new Cuenta;
      return view('cuentas.create')->with('cuenta',$cuenta);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $cuenta = new Cuenta;
      $cuenta->fill( $request->only('id','idGarzon','idMesa','fecha') );
      $cuenta->save();
      session()->flash('message','Cuenta Creada!');
      return redirect()->route('cuentas_path');
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
    public function edit(Cuenta $cuenta)
    {
        return view('cuentas.edit')->with(['cuenta' => $cuenta]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($cuenta, UpdateCuentaRequest $request)
    {
      $cuenta = Cuenta::find($cuenta);
      $cuenta->fill( $request->only('id','idGarzon','idMesa','fecha') );
      $cuenta->save();
      session()->flash('message','Cuenta Modificada!');
      return redirect()->route('cuentas_path');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $cuenta = Cuenta::find($id);
      $cuenta->delete();
      session()->flash('message','Cuenta Eliminada!');
      return redirect()->route('cuentas_path');
    }
}
