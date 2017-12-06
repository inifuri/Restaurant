@extends('layouts.admin')

@section('content')

    {!!Form::model($detalle,['route'=>['detalle.update', $detalle],'method'=>'PUT','onsubmit' => 'return ConfirmMod()'])!!}
			@include('detalles.forms.detalle')
		{!!Form::submit('Modificar',['class'=>'btn btn-info'])!!}
		{!!Form::close()!!}

@endsection
