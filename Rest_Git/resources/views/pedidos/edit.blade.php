@extends('layouts.admin')

@section('content')

    {!!Form::model($pedido,['route'=>['pedido.update', $pedido],'method'=>'PUT','onsubmit' => 'return ConfirmMod()'])!!}
			@include('pedidos.forms.pedido')
		{!!Form::submit('Modificar',['class'=>'btn btn-info'])!!}
		{!!Form::close()!!}

@endsection
