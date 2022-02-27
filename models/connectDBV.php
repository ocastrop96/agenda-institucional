<?php
class Conexion
{
	static public function conectar()
	{
		$link = new PDO(
			'mysql:host=localhost;dbname=rvisitas',
			'agenda-frontv',
			'6&$SKQ%l9XxEqXmi*U$*'
		);
		$link->exec("set names utf8");
		return $link;
	}
}
