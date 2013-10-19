<?php

namespace Controllers;

use Services\View;

class Carrinho {

	public static function index() {	
		View::exibir('Carrinho/index');		
	}

}