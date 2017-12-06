@extends('layouts.admin')

@section('content')

<table class="table table-striped">
  <tr>
      <th>Id Producto</th>
      <th>Nombre</th>
      <th>Precio</th>
      <th>Estado</th>
      <th>Modificar</th>
      <th>Eliminar</th>
  </tr>
  @foreach ($productos as $producto)
  <tr>
      <td>{{ $producto->id }}</td>
      <td>{{ $producto->nombre }}</td>
      <td>{{ $producto->precio }}</td>
      <td>{{ $producto->estado }}</td>
      <td>  <a href="{{route('edit_producto_path',['producto' => $producto->id]) }} " class="btn btn-info">Editar</a> </td>
      <td>
        {!!Form::open(['route'=>['producto.destroy', $producto],'method'=>'DELETE', 'onsubmit' => 'return ConfirmDelete()'])!!}
            {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
            {!!Form::close()!!}

  </tr>
  @endforeach
</table>

@endsection
