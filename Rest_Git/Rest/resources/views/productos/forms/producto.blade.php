<div class="form-group">
	<div class="form-group">
		{!!Form::label('nombre','Nombre:')!!}
		{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del producto', 'required', 'maxlength'=>50])!!}
	</div>

  <div class="form-group">
    {!!Form::label('precio','Precio:')!!}
    {!!Form::text('precio',null,['class'=>'form-control','placeholder'=>'Ingresa el Precio del producto', 'pattern'=>'^[0-9]*$'])!!}
  </div>

<div class="form-group">
	{!!Form::label('estado','Estado:')!!}
	{!!Form::select('estado', ['1' => 'Disponible', '0' => 'No Disponible'], '1')!!}
</div>

</div>
