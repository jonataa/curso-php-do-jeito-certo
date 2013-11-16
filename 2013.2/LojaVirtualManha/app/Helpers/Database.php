<?php

namespace Helpers;

class Database {

	private static function getConnection() {
		try {
			$connection = new \PDO('mysql:host=localhost;dbname=loja', 'root', 'mysqlpwd');
		} catch(\PDOException $e) {			
			echo 'Error: ' . $e->getMessage();
			die;
		}
		return $connection;
	}

	public static function query($sql) {
		$db = self::getConnection();
		$stmt = $db->query($sql);
		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}

}

