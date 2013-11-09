<?php

namespace Helpers;

class View 
{

	public static function exibir($view_name, $params = array()) {
		extract($params);
		return require VIEWS_PATH . $view_name .'.phtml';
	}

}