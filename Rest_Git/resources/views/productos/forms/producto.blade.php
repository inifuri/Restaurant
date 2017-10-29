<div class="form-group">
	<div class="form-group">
		{!!Form::label('nombre','Nombre:')!!}
		{!!Form::text('nombre',null,['placeholder'=>'Ingresa el Nombre del producto'])!!}
	</div>

  <div class="form-group">
    {!!Form::label('precio','Precio:')!!}
    {!!Form::number('precio', 0, ['min' => '0'])!!}
  </div>
<div class="form-group">
	{!!Form::label('estado','Estado:')!!}
	{!!Form::select('estado', ['1' => 'Disponible', '0' => 'No Disponible'], '1')!!}
</div>

</div>
