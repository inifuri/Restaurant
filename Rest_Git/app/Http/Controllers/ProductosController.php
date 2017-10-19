<?php

namespace rest\Http\Controllers;

use rest\Producto;
use Illuminate\Http\Request;
use rest\Http\Requests\UpdateProductoRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $productos = new Producto;
      $productos = Producto::all();
      return view('productos.index')->with('productos',$productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $producto = new Producto;
      return view('productos.create')->with('producto',$producto);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $producto = new Producto;
      $producto->fill( $request->only('id','nombre','precio','estado') );
      $producto->save();
      session()->flash('message','Producto Creado!');
      return redirect()->route('productos_path');
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
    public function edit(Producto $producto)
    {
        return view('productos.edit')->with(['producto' => $producto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($producto, UpdateProductoRequest $request)
    {
      $producto = Producto::find($producto);
      $producto->fill( $request->only('id','nombre','precio','estado') );
      $producto->save();
      session()->flash('message','Producto Modificado!');
      return redirect()->route('productos_path');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $producto = Producto::find($id);
      $producto->delete();
      session()->flash('message','Producto Eliminado!');
      return redirect()->route('productos_path');
    }
}
