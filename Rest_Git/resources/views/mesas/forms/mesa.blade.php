<div class="form-group">
	<div class="form-group">
		{!!Form::label('id','Número:')!!}
		{!!Form::text('id',null,['class'=>'form-control','placeholder'=>'Ingresa el Número de la Mesa'], ['disabled' =>'disabled'] )!!}
	</div>
	<div class="form-group">
		{!!Form::label('estado','Estado:')!!}
		{!!Form::select('estado', ['1' => 'Disponible', '0' => 'No Disponible'], '1')!!}
	</div>
	<div class="form-group">
		{!!Form::label('idGarzon','Garzón:')!!}
		{!!Form::select('idGarzon', $garzones, ['class' => 'form-control'])!!}
	</div>

</div>
