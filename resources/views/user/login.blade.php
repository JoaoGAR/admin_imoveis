@extends('master.master')

@section('conteudo')
<div class="container">
	<div class="well col-sm-6 col-sm-offset-3">
		<div class="text-center">
			<h3>Login</h3>
		</div>

		<div>
			<label>E-MAIL</label>
			<input class="form-control" type="text" name="email">
		</div>

		<div style="margin-top: 5px;">
			<label>SENHA</label>
			<input class="form-control" type="text" name="senha">
		</div>

		<div class="col-sm-4 col-sm-offset-4" style="margin-top: 10px;">
			<button class="btn btn-block btn-success">LOGAR</button>
		</div>
	</div>
</div>
@endsection