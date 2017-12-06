<div class="form-group">
	<br></br>
	<div class="form-group">
		{!!Form::label('idGarzon','Garzón:')!!}
		{!!Form::select('idGarzon', $garzones, ['class' => 'form-control'])!!}
		&nbsp;
		&nbsp;
		{!!Form::label('idMesa','Mesa:')!!}
		{!!Form::select('idMesa', $mesasD, ['class' => 'form-control'])!!}

	<!--	{!!Form::label('estado','Estado:')!!}
		{!!Form::select('estado', ['1' => 'Realizado', '0' => 'Rechazado'], '1')!!} -->

	</div>
	<div id = "prod" class="form-group">
		{!!Form::label('producto','Producto:')!!}
		{!!Form::select('producto', $productos, ['class' => 'form-control'])!!}
		&nbsp;
		&nbsp;
		{!!Form::label('cantidad', 'Cantidad:')!!}
			{!!Form::input('number','cantidad', null, ['min'=> 0, 'size'=> '5' , 'class' => 'form-control'] )!!}
	</div>
	{!!Form::macro('prod', function(){
		return Form::select('producto', $productos, ['class' => 'form-control']);
	})!!}
	<input type="button" id="mas_campos" onclick="add_fields();" value="Agregar producto" />

	<script>
		var producto = 1;
		function add_fields() {
    		producto++;
    		var objTo = document.getElementById('prod');
    		var divtest = document.createElement("div");
    		divtest.innerHTML = '<label> Producto: </label> <select> $productos </select> &nbsp &nbsp <label>Cantidad: </label><input type="number" name="cantidad" min="0">';

    		objTo.appendChild(divtest);
		}
	</script>



</div>
