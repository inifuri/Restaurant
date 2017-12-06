@extends('layouts.admin')

@section('content')
{!!Form::open(['route'=>'producto.store', 'method'=>'POST'])!!}

			@include('productos.forms.producto')

		{!!Form::submit('Registrar',['class'=>'btn btn-info'])!!}
		{!!Form::close()!!}
@endsection
