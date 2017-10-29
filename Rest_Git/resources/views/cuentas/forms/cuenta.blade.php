<div class="form-group">
  <div class="form-group">
		{!!Form::label('idMesa','Mesa:')!!}
		{!!Form::select('idMesa', $mesas, ['class' => 'form-control'])!!}
		&nbsp;
		&nbsp;
		{!!Form::label('idGarzon','Garzón:')!!}
		{!!Form::select('idGarzon', $garzones, ['class' => 'form-control'])!!}	
	</div>
</div>
