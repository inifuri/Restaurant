<?php

namespace rest\Http\Controllers;

use rest\Pedido;
use rest\Producto;
use rest\User;
use rest\Mesa;
use rest\Cuenta;
use rest\Detalle;
use Illuminate\Http\Request;
use rest\Http\Requests\UpdatePedidoRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('admin');
     }
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
      $productos = DB::table('producto')->where('estado', '1')->pluck('nombre', 'id');
    //  $productos = Producto::pluck('nombre', 'id');
    //  $garzones = User::pluck('nombres','username');
      $garzones = DB::table('users')->where('categoria', 'Garzón')->pluck('username','id');
      $mesasD = DB::table('mesa')->pluck('id');
      //$mesas = Mesa::pluck('id','estado');
      return view('pedidos.create', compact('mesasD', 'productos', 'garzones'))->with('pedido',$pedido);
    }

    /*
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $estMesa = DB::table('mesa')->where('id',$request->only('idMesa'))->pluck('estado');
      if($estMesa){
        $cuenta = new Cuenta;
        $cuenta->fill($request->only('idMesa', 'idGarzon'));
        $cuenta->save();
        //cambiar estado mesa a cero
      }

      $pedido = new Pedido;
      $pedido->fill( $request->only('id','idMesa','idGarzon','estado') );
      $pedido->save();
      $detalle = new Detalle;
      $cuenta = DB::table('cuenta')->where('idMesa', $request->only('idMesa'))->max('id');
     // $detalle->fill('id',$cuenta,$request->only('producto', 'id', 'cantidad'));
     $idpedido = DB::table('pedido')->max('id');
     $arrayName = array('idCuenta' => $cuenta ,
                           'idPedido' =>$idpedido,
                          'idProducto' => $request->get('producto'),
                            'cantidad'=>  $request->get('cantidad') );

      $detalle->fill($arrayName);
      $detalle->save();
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
