@extends('master.master')

@section('conteudo')
<div class="container">
	<div class="well col-sm-10 col-sm-offset-1">
		<form action="{{ route('cadastrar_imovel') }}" method="POST">
			{{ csrf_field() }}
			<h2>Cadastrar imóvel</h2>

			@if($errors->any())
			@foreach ($errors->all() as $error)
			<div class="text-center alert-danger">
				{{ $error }}
			</div>
			@endforeach
			@endif

			<div class="row" style="margin-top: 20px;">
				<div class="col-sm-4">
					<label>COD.Imóvel</label>
					<input class="form-control" type="text" name="cod_imovel">
				</div>

				<div class="col-sm-8">
					<label>Título do imóvel</label>
					<input class="form-control" type="text" name="titulo_imovel">
				</div>
			</div>

			<div class="row" style="margin-top: 20px;">
				<div class="col-sm-3">
					<label>Preço</label>
					<input class="form-control" type="text" name="preco_imovel">
				</div>

				<div class="col-sm-3">
					<label>Area do imóvel</label>
					<input class="form-control" type="text" name="area_imovel">
				</div>

				<div class="col-sm-3">
					<label>Quantidade de dormitórios</label>
					<input class="form-control" type="text" name="qtd_dormitorios_imovel">
				</div>

				<div class="col-sm-3">
					<label>Imagem do imóvel</label>
					<input class="form-control" type="upload" name="imagem_imovel">
				</div>
			</div>

			<div class="row" style="margin-top: 20px;">
				<div class="col-sm-2">
					<label>CEP</label>
					<input id="cep" class="form-control" type="text" name="cep_imovel">
				</div>

				<div class="col-sm-3">
					<label>Cidade</label>
					<input id="cidade" class="form-control" type="text" name="cidade_imovel">
				</div>

				<div class="col-sm-3">
					<label>Bairro</label>
					<input id="bairro" class="form-control" type="text" name="bairro_imovel">
				</div>

				<div class="col-sm-4">
					<label>Estado</label>
					<input id="estado" class="form-control" type="text" name="estado_imovel">
				</div>
			</div>

			<div class="row" style="margin-top: 20px;">
				<div class="col-sm-4">
					<label>Rua</label>
					<input id="rua" class="form-control" type="text" name="rua_imovel">
				</div>

				<div class="col-sm-4">
					<label>Numero</label>
					<input id="numero" class="form-control" type="text" name="numero_imovel">
				</div>

				<div class="col-sm-4">
					<label>Complemento</label>
					<input id="complemento" class="form-control" type="text" name="complemento_imovel">
				</div>
			</div>

			<div class="row" style="margin-top: 20px;">
				<div class="col-sm-12">
					<label>Descricao do imóvel</label>
					<textarea class="form-control" type="text" name="descricao_imovel"></textarea>
				</div>
			</div>

			<div class="row" style="margin-top: 20px;">
				<div class="col-sm-4">
					<button type="submit" class="btn btn-lg btn-success btn-block">Cadastrar</button>
				</div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript">
	$('#cep').on('keyup blur click', function(e){
		var cep = $(this).val().replace(/\D/g, '');

		if (cep != "") 
		{
			var validacep = /^[0-9]{8}$/;

			$.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) 
			{

				if (!("erro" in dados)) 
				{
					$("#rua").val(dados.logradouro);
					$("#bairro").val(dados.bairro);
					$("#cidade").val(dados.localidade);
					$("#estado").val(dados.uf);

					console.log(dados);
				}
				else 
				{
					alert("CEP não encontrado.");
				}
			});
		}
	});

</script>
@endsection