<div class="form-group">
<!--	<div class="form-group">
		{!!Form::label('idGarzon','Id Garzón:')!!}
		{!!Form::text('idGarzon',null,['class'=>'form-control','placeholder'=>'Ingresa el Id del Garzón'])!!}
	</div> -->
	<div class="form-group">
		{!!Form::label('idGarzon','Id Garzón:')!!}
		{!!Form::select('idGarzon', $garzones, ['class' => 'form-control'])!!}

	</div>
	<!--<div class="form-group">
		{!!Form::label('idMesa','Id Mesa:')!!}
		{!!Form::text('idMesa',null,['class'=>'form-control','placeholder'=>'Ingresa el Id de la Mesa'])!!}
	</div> -->
	<div class="form-group">
		{!!Form::label('idMesa','Id Mesa:')!!}
		{!!Form::select('idMesa', $mesas, ['class' => 'form-control'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('producto','Producto:')!!}
		{!!Form::select('producto', $productos, ['class' => 'form-control'])!!}
	</div>

	<div class="form-group">
		{!!Form::label('estado','Estado:')!!}
		{!!Form::select('estado', ['1' => 'Realizado', '0' => 'Rechazado'], '1')!!}
	</div>
</div>
