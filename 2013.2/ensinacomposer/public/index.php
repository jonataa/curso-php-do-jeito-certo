<?php require '../vendor/autoload.php';

define('ROOT', dirname(__DIR__));
define('VIEW_PATH', ROOT . '/app/View/');

use Respect\Rest\Router;
use Controller\Produto;

$loader = new Twig_Loader_Filesystem(VIEW_PATH);
$twig   = new Twig_Environment($loader);

$r = new Router();

$r->get('/', function() use ($twig) {
	return $twig->render('index.html', array('name' => 'Jonata'));
});
$r->get('/produtos', function() use ($twig) {	
	return Produto::index();
});
$r->get('/produtos/listar', function() {	
	return 'Lista de Produtos';
});
$r->post('/produtos/alterar', function() {	
	return Produto::alteraProduto($_POST['descricao'], $_POST['preco']);
});
$r->get('/produtos/limparsessao', function(){
	return Produto::limparSessao();
});
$r->get('/pagina-nao-encontrada', function() {
	http_response_code(404);
	return 'Pagina nao encontrada!';
});