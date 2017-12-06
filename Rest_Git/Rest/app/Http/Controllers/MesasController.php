<?php

namespace rest\Http\Controllers;

use rest\Mesa;
use Illuminate\Http\Request;
use rest\Http\Requests\UpdateMesaRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
class MesasController extends Controller
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
        $this->middleware('admin');
      $mesas = new Mesa;
      $mesas = Mesa::all();
      return view('mesas.index')->with('mesas',$mesas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $mesa = new Mesa;
      $garzones = DB::table('users')->where('categoria', 'Garzón')->pluck('username','id');
      return view('mesas.create', compact('garzones'))->with('mesa',$mesa);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mesa = new Mesa;
        $mesa->save();
        session()->flash('message','Mesa Creado!');
        return redirect()->route('mesas_path');
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
    public function edit(Mesa $mesa)
    {
      $garzones = DB::table('users')->where('categoria', 'Garzón')->pluck('username', 'id');
      return view('mesas.edit', compact('garzones'))->with(['mesa' => $mesa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($mesa, UpdateMesaRequest $request)
    {
      $mesa = Mesa::find($mesa);
      $mesa->fill( $request->only('id','estado','idGarzon'));
      $mesa->save();
      session()->flash('message','Mesa Modificada!');
      return redirect()->route('mesas_path');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mesa = Mesa::find($id);
        $mesa->delete();
        session()->flash('message','Mesa Eliminada!');
        return redirect()->route('mesas_path');

    }

}
