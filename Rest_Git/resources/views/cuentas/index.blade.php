@extends('layouts.admin')

@section('content')
<table class="table table-striped">
  <tr>
      <th>Id</th>
      <th>Id Garzón</th>
      <th>Id Mesa</th>
      <th>Fecha creación</th>
      <th>Modificar</th>
      <th>Eliminar</th>
  </tr>
  @foreach ($cuentas as $cuenta)
  <tr>
      <td>{{ $cuenta->id }}</td>
      <td>{{ $cuenta->idGarzon }}</td>
      <td>{{ $cuenta->idMesa }}</td>
      <td>{{ $cuenta->created_at }}</td>
      <td>  <a href="{{route('edit_cuenta_path',['cuenta' => $cuenta->id]) }} " class="btn btn-info">Editar</a> </td>
      <td>
        {!!Form::open(['route'=>['cuenta.destroy', $cuenta],'method'=>'DELETE', 'onsubmit' => 'return ConfirmDelete()'])!!}
            {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
            {!!Form::close()!!}

      </td>
  </tr>
  @endforeach
</table>

@endsection
