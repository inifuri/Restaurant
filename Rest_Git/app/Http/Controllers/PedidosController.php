<?php

namespace rest\Http\Controllers;

use rest\Pedido;
use rest\Producto;
use rest\User;
use rest\Mesa;
use Illuminate\Http\Request;
use rest\Http\Requests\UpdatePedidoRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $pedidos = new Pedido;
      $pedidos = Pedido::all();
      return view('pedidos.index')->with('pedidos',$pedidos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $pedido = new Pedido;
      //$productos = DB::table('producto')->lists('id','nombre');
      $productos = Producto::pluck('nombre', 'id');
      $garzones = User::pluck('nombres','username');
      $mesas = Mesa::pluck('id','estado');
      return view('pedidos.create', compact('productos'), compact('mesas'), compact('garzones'))->with('pedido',$pedido);
    }

    /*
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $pedido = new Pedido;
      $pedido->fill( $request->only('id','idMesa','idGarzon','estado') );
      $pedido->save();
      session()->flash('message','Pedido Creado!');
      return redirect()->route('pedidos_path');
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
    public function edit(Pedido $pedido)
    {
        return view('pedidos.edit')->with(['pedido' => $pedido]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($pedido, UpdatePedidoRequest $request)
    {
      $pedido = Pedido::find($pedido);
      $pedido->fill( $request->only('id','idMesa','idGarzon','estado') );
      $pedido->save();
      session()->flash('message','Pedido Modificado!');
      return redirect()->route('pedidos_path');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $pedido = Pedido::find($id);
      $pedido->delete();
      session()->flash('message','Pedido Eliminado!');
      return redirect()->route('pedidos_path');
    }
}
