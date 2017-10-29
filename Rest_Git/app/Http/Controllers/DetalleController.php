<?php

namespace rest\Http\Controllers;

use rest\Detalle;
use Illuminate\Http\Request;
use rest\Http\Requests\UpdateDetalleRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class DetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $detalles = new Detalle;
      $detalles = Detalle::all();
      return view('detalles.index')->with('detalles',$detalles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $detalle = new Detalle;
      return view('detalles.create')->with('detalle',$detalle);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $detalle = new Detalle;
      $detalle->fill( $request->only('id','idPedido','idCuenta','idProducto','cantidad') );
      $detalle->save();
      session()->flash('message','Cuenta Producto Creada!');
      return redirect()->route('detalles_path');
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
    public function edit(Detalle $detalle)
    {
        return view('detalles.edit')->with(['detalle' => $detalle]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($detalle, UpdateDetalleRequest $request)
    {
      $detalle = Detalle::find($detalle);
      $detalle->fill( $request->only('id','idPedido','idCuenta','idProducto','cantidad') );
      $detalle->save();
      session()->flash('message','Detalle Producto Modificada!');
      return redirect()->route('detalles_path');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $detalle = Detalle::find($id);
      $detalle->delete();
      session()->flash('message','Detalle Producto Eliminada!');
      return redirect()->route('detalles_path');
    }
}
