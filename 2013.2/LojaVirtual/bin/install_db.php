<?php

$pdo = new \PDO('sqlite:/Users/jweber/dev/projects/php/cursophp/www/LojaVirtual/database/loja.db');

$produto_sql = 'DROP TABLE IF EXISTS "produto";
				CREATE TABLE "produto" (
					 "id" integer NOT NULL PRIMARY KEY AUTOINCREMENT,
					 "descricao" text NOT NULL,					 
					 "preco" decimal(10,2) NOT NULL,
					 "estoque" integer NOT NULL
				);';

$pdo->exec($produto_sql);
$pdo->query('INSERT INTO produto(descricao, preco, estoque)
			 VALUES("TV de Plasma", 3999.90, 200)');
$pdo->query('INSERT INTO produto(descricao, preco, estoque)
			 VALUES("PS4", 4000, 1000)');
$pdo->query('INSERT INTO produto(descricao, preco, estoque)
			 VALUES("Dual Chip", 200.65, 0)');

$result = $pdo->query('SELECT * FROM produto;');
$produtos = $result->fetchAll(\PDO::FETCH_ASSOC);
print_r($produtos);