@extends('layouts.admin')

@section('content')

<table class="table table-striped">
  <tr>
      <th>Id</th>
      <th>Id Garzón</th>
      <th>Id Mesa</th>
      <th>Estado</th>
      <th>Modificar</th>
      <th>Eliminar</th>
  </tr>
  @foreach ($pedidos as $pedido)
  <tr>
      <td>{{ $pedido->id }}</td>
      <td>{{ $pedido->idGarzon }}</td>
      <td>{{ $pedido->idMesa }}</td>
      <td>{{ $pedido->estado }}</td>
      <td>  <a href="{{route('edit_pedido_path',['pedido' => $pedido->id]) }} " class="btn btn-info">Editar</a> </td>
      <td>
        {!!Form::open(['route'=>['pedido.destroy', $pedido],'method'=>'DELETE', 'onsubmit' => 'return ConfirmDelete()'])!!}
            {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
            {!!Form::close()!!}

      </td>
  </tr>
  @endforeach
</table>

@endsection
