<div class="form-group">
	<div class="form-group">
		{!!Form::label('username','Username:')!!}
		{!!Form::text('username',null,['class'=>'form-control','placeholder'=>'Ingresa el Username del usuario'])!!}
	</div>

  <div class="form-group">
    {!!Form::label('nombres','Nombres:')!!}
    {!!Form::text('nombres',null,['class'=>'form-control','placeholder'=>'Ingresa los Nombres del usuario'])!!}
  </div>

  <div class="form-group">
		{!!Form::label('apellidos','Apellidos:')!!}
		{!!Form::text('apellidos',null,['class'=>'form-control','placeholder'=>'Ingresa los Apellidos del usuario'])!!}
	</div>


	<div class="form-group">
		{!!Form::label('email','Email:')!!}
		{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el Email del usuario'])!!}
	</div>



	<div class="form-group">
		{!!Form::label('categoria','Categoría:')!!}
		{!!Form::select('categoria', ['Administrador' => 'Administrador', 'Garzón' => 'Garzón', 'Jefe de Cocina' => 'Jefe de Cocina' ], 'Garzón')!!}
	</div>



</div>
