@if( $mesa->exists )

  <form action="{{route('update_mesa_path',['mesa'=> $mesa->id]) }}" method="POST">

    {{ method_field('PUT') }}

@else

  <form action="{{route('store_mesa_path') }}" method="POST">

@endif

{{ csrf_field() }}

<div class="form-group">
  <button type="submit" class="btn btn-primary">Agregar Mesa</button>
</div>

</form>
