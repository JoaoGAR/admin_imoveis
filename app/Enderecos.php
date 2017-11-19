<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enderecos extends Model
{
	protected $fillable = [
		'id_endereco', 'cep', 'cidade', 'bairro', 'rua', 'numero', 'complemento', 'estado'
	];

	public static function new_endereco($data)
	{
		return self::insertGetId($data);
	}
}
