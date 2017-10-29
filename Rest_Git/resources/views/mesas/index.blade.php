@extends('layouts.admin')

@section('content')

<table class="table table-striped">
  <tr>
      <th>Número de mesa</th>
      <th>Estado</th>
      <th>Id Garzón</th>
      <th>Modificar</th>
      <th>Eliminar</th>
  </tr>
  @foreach ($mesas as $mesa)
  <tr>
      <td>{{ $mesa->id }}</td>
      <td>{{ $mesa->estado }}</td>
      <td>{{ $mesa->idGarzon }}</td>
      <td>  <a href="{{route('edit_mesa_path',['mesa' => $mesa->id]) }} " class="btn btn-info">Editar</a> </td>
      <td>
        {!!Form::open(['route'=>['mesa.destroy', $mesa],'method'=>'DELETE', 'onsubmit' => 'return ConfirmDelete()'])!!}
            {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
            {!!Form::close()!!}

      </td>
  </tr>
  @endforeach
</table>

@endsection
