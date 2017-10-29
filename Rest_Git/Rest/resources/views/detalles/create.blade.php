@extends('layouts.admin')

@section('content')
{!!Form::open(['route'=>'detalle.store', 'method'=>'POST'])!!}

			@include('detalles.forms.detalle')

		{!!Form::submit('Registrar',['class'=>'btn btn-info'])!!}
		{!!Form::close()!!}
@endsection
