<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Session\TokenMismatchException;
use App\Imoveis;
use App\Enderecos;


class Imovel_controller extends Controller
{
	public static function imoveis($cod_imovel, $id_imovel, $titulo_imovel)
	{
		$imoveis = Imoveis::get_imoveis($cod_imovel, $id_imovel, $titulo_imovel);

		return $imoveis;
	}

	public function index(Request $request)
	{
		$cod_imovel = $request->input('cod_imovel');
		$id_imovel = $request->input('id_imovel');
		$titulo_imovel = $request->input('titulo_imovel');

		$imoveis = self::imoveis($cod_imovel, $id_imovel, $titulo_imovel);

		$data = array(
			'imoveis' => $imoveis
		);

		return view('admin.imoveis', $data);
	}

	public function cadastrar_imovel(Request $request)
	{
		$this->validate($request, [
			'cod_imovel' => 'required|unique|max:255',
			'titulo_imovel' => 'required|unique|max:100',
			'preco_imovel' => 'required',
			'area_imovel' => 'required',
			'qtd_dormitorios_imovel' => 'required',
			'imagem_imovel' => 'required',
			'descricao_imovel' => 'required'
		]);

		$endereco = array(
			'cep' => $request->input('cep'), 
			'cidade' => $request->input('cidade'), 
			'bairro' => $request->input('bairro'), 
			'rua' => $request->input('rua'), 
			'numero' => $request->input('numero'), 
			'complemento' => $request->input('complemento'), 
			'estado' => $request->input('estado')
		);

		$data = array(
			'titulo_imovel' => $request->input('titulo_imovel'),
			'cod_imovel' => $request->input('cod_imovel'),
			'id_tipo_imovel' => $request->input('id_tipo_imovel'),
			'id_endereco_imovel' => Enderecos::new_endereco($endereco),
			'preco_imovel' => $request->input('preco_imovel'),
			'area_imovel' => $request->input('area_imovel'),
			'qtd_dormitorios' => $request->input('qtd_dormitorios_imovel'),
			'descricao_imovel' => $request->input('descricao_imovel'),
			'imagem_imovel' => $request->input('imagem_imovel')
		);

		Imoveis::new_imovel($data);
	}
}
