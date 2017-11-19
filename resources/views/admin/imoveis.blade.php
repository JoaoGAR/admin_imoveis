@extends('master.master')

@section('conteudo')
<div class="container">
	<div class="row">
		<form action="{{ route('/imoveis') }}" method="GET">
			<div class="col-sm-3">
				<label>ID</label>
				<input class="form-control" type="text" name="id_imovel">
			</div>

			<div class="col-sm-3">
				<label>COD</label>
				<input class="form-control" type="text" name="cod_imovel">
			</div>

			<div class="col-sm-3">
				<label>Título</label>
				<input class="form-control" type="text" name="titulo_imovel">
			</div>

			<div class="col-sm-3">
				<button style="margin-top: 23px;" class="btn btn-block btn-info">Pesquisar</button>
			</div>
		</form>
	</div>

	<div class="row" style="margin-top: 20px;">
		<div class="col-sm-3 col-sm-offset-6">
			<button class="btn btn-block btn-warning">Importar imóveis</button>
		</div>

		<div class="col-sm-3">
			<form action="{{ route('/imoveis/cadastrar_imovel') }}" method="GET">
				<button class="btn btn-block btn-primary">Cadastrar imóvel</button>
			</form>
		</div>
	</div>

	<hr>

	<table class="table table-responsive">
		<thead>
			<tr>
				<th scope="col">COD. IMÓVEL</th>
				<th scope="col">TITULO IMÓVEL</th>
				<th scope="col">PREÇO IMÓVEL</th>
				<th scope="col">AREA IMÓVEL</th>
				<th scope="col">QTD DORMITÓRIOS</th>
				<th scope="col">TIPO DE IMÓVEL</th>
			</tr>
		</thead>
		<tbody>
			@foreach($imoveis as $imovel)
			<tr>
				<th>{{ $imovel->cod_imovel }}</th>
				<td>{{ $imovel->titulo_imovel }}</td>
				<td>{{ $imovel->preco_imovel }}</td>
				<td>{{ $imovel->area_imovel }}</td>
				<td>{{ $imovel->qtd_dormitorios }}</td>
				<td>{{ $imovel->id_tipo_imovel }}</td>
				<td><button class="btn btn-xs btn-info">Ver</button></td>
				<td><button class="btn btn-xs btn-danger">Excluir</button></td>
			</tr>
			@endforeach()
			<tr>
				<td colspan="8">{{ $imoveis->links() }}</td>
			</tr>
		</tbody>
	</table>

	<div class="row">
		
	</div>
</div>
@endsection