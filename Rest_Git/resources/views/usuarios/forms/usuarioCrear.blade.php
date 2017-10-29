<div class="form-group">
	<div class="form-group">
		{!!Form::label('username','Username:')!!}
		{!!Form::text('username',null,['class'=>'form-control','placeholder'=>'Ingresa el Username del usuario', 'maxlength'=>25, 'required'])!!}
	</div>

  <div class="form-group">
    {!!Form::label('nombres','Nombres:')!!}
    {!!Form::text('nombres',null,['class'=>'form-control','required','placeholder'=>'Ingresa los Nombres del usuario', 'maxlength'=>25, 'pattern'=>'^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$', 'title'=>"No se permiten caracteres especiales"])!!}
  </div>

  <div class="form-group">
		{!!Form::label('apellidos','Apellidos:')!!}
		{!!Form::text('apellidos',null,['class'=>'form-control','required','maxlength'=>25,'placeholder'=>'Ingresa los Apellidos del usuario', 'pattern'=>'^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$', 'title'=>"No se permiten caracteres especiales"])!!}
	</div>

	<div class="form-group">
    {!!Form::label('password','Contraseña:')!!}
    {!!Form::password('password',null,['class'=>'form-control','required','placeholder'=>'Ingresa la contraseña del usuario','pattern'=>'^[a-zA-Z]+$', 'title'=>"No se permiten caracteres especiales"])!!}
  </div>
	<div class="form-group">
		{!!Form::label('password_confirmation', 'Confirmar contraseña') !!}
		{!!Form::password('password_confirmation', null, ['class'=>'form-control', 'required', 'placeholder'=>'Confirme contraseña']) !!}
	</div>
	<div class="form-group">
		{!!Form::label('email','Email:')!!}
		{!!Form::text('email',null,['class'=>'form-control', 'required','placeholder'=>'Ingresa el Email del usuario', 'maxlength'=>100, 'pattern'=>'^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$', 'title'=>"Ingrese un correo valido"])!!}
	</div>

	<div class="form-group">
		{!!Form::label('categoria','Categoría:')!!}
		{!!Form::select('categoria', ['Administrador' => 'Administrador', 'Garzón' => 'Garzón', 'Jefe de Cocina' => 'Jefe de Cocina' ], 'Garzón')!!}
	</div>
<!--		<select>
		<option value="Administrador">Administrador</option>
		<option value="Garzón">Garzón</option>
		<option value="Jefe de Cocina">Jefe de Cocina</option>
		</select>
 -->
<!--  <div class="form-group">
		{!!Form::label('categoria','Categoría:')!!}
		{!!Form::text('categoria',null,['class'=>'form-control','placeholder'=>'Ingresa la Categoría del usuario'])!!}
	</div>

	<div class="form-group">
		{!!Form::label('password_confirmation', 'Confirmar contraseña') !!}
		{!!Form::password('password_confirmation', null, ['class'=>'form-control', 'required', 'placeholder'=>'Confirme contraseña']) !!}
	</div>

-->

</div>
