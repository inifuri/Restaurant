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
  @foreach ($users as $user)
  <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->username }}</td>
      <td>{{ $user->nombres }}</td>
      <td>{{ $user->apellidos }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->categoria }}</td>
      <td>  <a href="{{route('edit_user_path',['user' => $user->id]) }} " class="btn btn-info">Editar</a> </td>
      <td>
        {!!Form::open(['route'=>['user.destroy', $user],'method'=>'DELETE'])!!}
            {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
            {!!Form::close()!!}

      </td>
  </tr>
  @endforeach
</table>

@endsection
