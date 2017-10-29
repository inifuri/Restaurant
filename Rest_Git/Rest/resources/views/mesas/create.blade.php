@extends('layouts.admin')

@section('content')

<h2>Creando Mesa</h2>

@include('mesas._form', ['mesa' => $mesa])

@endsection
