<?php
require_once __DIR__ . './../logistik/configdatabase.php';
require_once __DIR__ . './../includes/Database.php';


class Databasetabelle
{

	public $id;
	public $name;
	public $email;
	public $telefon;
	public $message;
	public $zeit;




	public static function speichert($name, $email, $telefon, $message)
	{
		$db = Database::getInstance();

		$db->insert(
			'Databasetabelle',
			'INSERT INTO sandmail (name, email, telefon, message) ' .
				'VALUES (:n, :e,  :t, :m)',
			[
				':n' => $name,
				':e' => $email,
				':t' => $telefon,
				':m' => $message,



			]
		);
	}
}
