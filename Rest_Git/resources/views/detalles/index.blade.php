@extends('layouts.admin')

@section('content')
<table class="table table-striped">
  <tr>
      <th>Id</th>
      <th>Id Pedido</th>
      <th>Id Cuenta</th>
      <th>Id Producto</th>
      <th>Cantidad</th>
      <th>Modificar</th>
      <th>Eliminar</th>
  </tr>
  @foreach ($detalles as $detalle)
  <tr>
      <td>{{ $detalle->id }}</td>
      <td>{{ $detalle->idPedido }}</td>
      <td>{{ $detalle->idCuenta }}</td>
      <td>{{ $detalle->idProducto }}</td>
      <td>{{ $detalle->cantidad }}</td>
      <td>  <a href="{{route('edit_detalle_path',['detalle' => $detalle->id]) }} " class="btn btn-info">Editar</a> </td>
      <td>
        {!!Form::open(['route'=>['detalle.destroy', $detalle],'method'=>'DELETE', 'onsubmit' => 'return ConfirmDelete()'])!!}
            {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
            {!!Form::close()!!}

      </td>
  </tr>
  @endforeach
</table>

@endsection
