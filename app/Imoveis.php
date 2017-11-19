<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imoveis extends Model
{
	protected $fillable = [
		'id_imovel',
		'titulo_imovel',
		'cod_imovel',
		'id_tipo_imovel',
		'id_endereco_imovel',
		'preco_imovel',
		'area_imovel',
		'qtd_dormitorios',
		'descricao_imovel',
		'imagem_imovel'
	];

	public static function get_imoveis($id_imovel, $cod_imovel, $titulo_imovel)
	{
		return self::where('cod_imovel', 'LIKE', $cod_imovel)->where('id_imovel', 'LIKE', $id_imovel)->where('titulo_imovel', 'LIKE', $titulo_imovel)->join('tipo_imovel', 'tipo_imovel.id_tipo_imovel', 'imoveis.id_tipo_imovel')->paginate(10);
	}

	public static function get_imovel($id_imovel, $cod_imovel)
	{
		return self::where('imoveis.cod_imovel', $cod_imovel)->where('imoveis.id_imovel', $id_imovel)->join('enderecos', 'enderecos.id_endereco', 'imoveis.id_endereco_imovel')->join('tipo_imovel', 'tipo_imovel.id_tipo_imovel', 'imoveis.id_tipo_imovel')->get();
	}

	public static function new_imovel($data)
	{
		return self::insertGetId($data);
	}

	public static function delete_imovel($id_imovel, $cod_imovel)
	{
		self::where('cod_imovel', $cod_imovel)->where('id_imovel', $id_imovel)->delete();
	}
}
