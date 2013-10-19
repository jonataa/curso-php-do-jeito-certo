<?php

namespace Services;

class View {

	public static function exibir($nome, $params = array()) {
		extract($params);
		require VIEW_PATH . $nome . '.phtml';
	}

}