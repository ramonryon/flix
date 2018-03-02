<?php  

class serieController extends controller{

	public function index(){

	}

	public function assistir($slug){
		$dados = array();
		$temporadas = array();

		$s = new Series();
		$t = new Temporadas();

		if(empty($slug)){
			header("Location: ".BASE_URL);
			exit;
		}

		$info = $s->getSerie($slug);
		$qt = $info['qt_temporadas'];

		if(isset($qt) && !empty($qt)){
			$temporadas = $t->getTemporadas($qt);
		}

		$dados['info'] = $info;
		$dados['temporadas'] = $temporadas;

		$this->loadTemplate('serie', $dados);
	}
}

?>