@extends('layouts.admin')

@section('content')

    {!!Form::model($mesa,['route'=>['mesa.update', $mesa],'method'=>'PUT','onsubmit' => 'return ConfirmMod()'])!!}
			@include('mesas.forms.mesa')
		{!!Form::submit('Modificar',['class'=>'btn btn-info'])!!}
		{!!Form::close()!!}

@endsection
