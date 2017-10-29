@extends('layouts.admin')

@section('content')

    {!!Form::model($pedido,['route'=>['pedido.update', $pedido],'method'=>'PUT','onsubmit' => 'return ConfirmMod()'])!!}
			@include('pedidos.forms.pedidoEdit')
		{!!Form::submit('Modificar',['class'=>'btn btn-info'])!!}
		{!!Form::close()!!}

@endsection
