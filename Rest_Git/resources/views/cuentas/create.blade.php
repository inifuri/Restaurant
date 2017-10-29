@extends('layouts.admin')

@section('content')
{!!Form::open(['route'=>'cuenta.store', 'method'=>'POST'])!!}

			@include('cuentas.forms.cuenta')

		{!!Form::submit('Registrar',['class'=>'btn btn-info'])!!}
		{!!Form::close()!!}
@endsection
