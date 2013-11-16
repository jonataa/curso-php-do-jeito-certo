<?php

$pdo = new PDO('mysql:host=localhost;dbname=loja', 'root', 'mysqlpwd');

$pdo->exec('DROP TABLE IF EXISTS `loja`.`produto`;
			CREATE TABLE `loja`.`produto` (
			  `id` INT NOT NULL AUTO_INCREMENT,
			  `descricao` VARCHAR(100) NOT NULL,
			  `categoria` VARCHAR(100) NOT NULL,
			  `preco` DECIMAL(10,2) NOT NULL,
			  PRIMARY KEY (`id`));');

$pdo->query('INSERT INTO produto(id, descricao, categoria, preco)
			 VALUES(1, "TV de LED 52 Polegadas", "Eletrônico", 4199);');
$pdo->query('INSERT INTO produto(id, descricao, categoria, preco)
			 VALUES(2, "Videogame Sony PS4", "Eletrônico", 4000);');

$statement = $pdo->query('SELECT * FROM produto;');
$rows 	   = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($rows[0]['preco']);


