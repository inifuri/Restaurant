@extends('layouts.admin')

@section('content')

<table class="table table-striped">
  <tr>
      <th>Id</th>
      <th>Username</th>
      <th>Nombres</th>
      <th>Apellidos</th>
      <th>Email</th>
      <th>Categoría</th>
      <th>Modificar</th>
      <th>Eliminar</th>
  </tr>
  @foreach ($usuarios as $usuario)
  <tr>
      <td>{{ $usuario->id }}</td>
      <td>{{ $usuario->username }}</td>
      <td>{{ $usuario->nombres }}</td>
      <td>{{ $usuario->apellidos }}</td>
      <td>{{ $usuario->email }}</td>
      <td>{{ $usuario->categoria }}</td>
      <td>  <a href="{{route('edit_usuario_path',['usuario' => $usuario->id]) }} " class="btn btn-info">Editar</a> </td>
      <td>
        {!!Form::open(['route'=>['usuario.destroy', $usuario],'method'=>'DELETE', 'onsubmit' => 'return ConfirmDelete()'])!!}
            {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
            {!!Form::close()!!}

  </tr>
  @endforeach
</table>

@endsection
