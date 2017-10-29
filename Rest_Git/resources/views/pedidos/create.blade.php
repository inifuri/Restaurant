@extends('layouts.admin')

@section('content')
{!!Form::open(['route'=>'pedido.store', 'method'=>'POST'])!!}

			@include('pedidos.forms.pedido')

		{!!Form::submit('Registrar',['class'=>'btn btn-info'])!!}
		{!!Form::close()!!}
@endsection
