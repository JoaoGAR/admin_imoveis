<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Session\TokenMismatchException;
use Hash;
use App\Imoveis;
use App\Enderecos;


class Imovel_controller extends Controller
{
	public static function imoveis($cod_imovel, $id_imovel, $titulo_imovel)
	{
		$imoveis = Imoveis::get_imoveis($cod_imovel, $id_imovel, $titulo_imovel);

		return $imoveis;
	}

	function aliseString($string)
	{
		$new_string = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/","/ /"),explode(" ","a A e E i I o O u U n N -"),$string);
		return $new_string;
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
			'cod_imovel' => 'required|max:255',
			'titulo_imovel' => 'required|max:100',
			'preco_imovel' => 'required',
			'area_imovel' => 'required',
			'qtd_dormitorios_imovel' => 'required',
			'imagem_imovel' => 'required',
			'descricao_imovel' => 'required'
		]);

		$endereco = array(
			'cep' => $request->input('cep_imovel'),
			'cidade' => $request->input('cidade_imovel'),
			'bairro' => $request->input('bairro_imovel'),
			'estado' => $request->input('estado_imovel'),
			'rua' => $request->input('rua_imovel'),
			'numero' => $request->input('numero_imovel'),
			'complemento' => $request->input('complemento_imovel')
		);

		$imagem_nome = $request->file('imagem_imovel')->getClientOriginalName();

		$imagem_extensao = $request->file('imagem_imovel')->getClientOriginalExtension();
		$imagem_novo_nome = $this->aliseString($imagem_nome);

		$request->file('imagem_imovel')->move(base_path() . '/public/images/imoveis/imagens/', $imagem_novo_nome);
		$url = '/images/imoveis/imagens/' . $imagem_novo_nome;

		$data = array(
			'titulo_imovel' => $request->input('titulo_imovel'),
			'cod_imovel' => $request->input('cod_imovel'),
			'id_tipo_imovel' => $request->input('id_tipo_imovel'),
			'id_endereco_imovel' => Enderecos::new_endereco($endereco),
			'preco_imovel' => $request->input('preco_imovel'),
			'area_imovel' => $request->input('area_imovel'),
			'qtd_dormitorios' => $request->input('qtd_dormitorios_imovel'),
			'descricao_imovel' => $request->input('descricao_imovel'),
			'imagem_imovel' => $url
		);

		Imoveis::new_imovel($data);

		return view('admin.formulario_cadastro_imovel');
	}

	public function imovel_info(Request $request)
	{
		$imovel_id = $request->input('imovel_id');
		$cod_imovel = $request->input('cod_imovel');

		$imovel = Imoveis::get_imovel($imovel_id, $cod_imovel);

		$data = array(
			'imovel' => $imovel[0]
		);

		return view('admin.modais.imovel_info', $data);
	}

	public function excluir_imovel(Request $request)
	{
		$imovel_id = $request->input('imovel_id');
		$cod_imovel = $request->input('cod_imovel');

		$imovel = Imoveis::delete_imovel($imovel_id, $cod_imovel);

		$imoveis = self::imoveis($cod_imovel, $imovel_id, '');

		$data = array(
			'imoveis' => $imoveis
		);
		return view('admin.imoveis', $data);
	}
}
