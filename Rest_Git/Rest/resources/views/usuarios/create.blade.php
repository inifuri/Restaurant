@extends('layouts.admin')

@section('content')
{!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}

			@include('usuarios.forms.usuarioCrear')

		{!!Form::submit('Registrar',['class'=>'btn btn-info'])!!}
		{!!Form::close()!!}
@endsection
