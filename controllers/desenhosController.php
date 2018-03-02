<?php  

class desenhosController extends controller{

	public function index(){
		$dados = array();

		$d = new Desenhos();
		$desenhos = $d->getDesenhos();

		$dados['desenhos'] = $desenhos;

		$this->loadTemplate('desenhos', $dados);
	}

}

?>