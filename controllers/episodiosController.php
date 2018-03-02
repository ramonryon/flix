<?php  

class episodiosController extends controller{

	public function index(){

	}

	public function listarDesenho($desenho, $temporada){
		$dados = array();

		$e = new Episodios();

		$episodios = $e->getEpisodiosDesenhos($desenho, $temporada);
		$dados['episodios'] = $episodios;

		$this->loadTemplate('episodios', $dados);
	}

	public function abrirDesenho($id, $item, $temporada){
		$dados = array();

		$e = new Episodios();

		$episodio = $e->getEpisodioDesenho($id, $item, $temporada);
		$dados['episodio'] = $episodio;

		$this->loadTemplate('episodio', $dados);
	}

	public function listarSerie($serie, $temporada){
		$dados = array();

		$e = new Episodios();

		$episodios = $e->getEpisodiosSeries($serie, $temporada);
		$dados['episodios'] = $episodios;

		$this->loadTemplate('episodios', $dados);
	}

	public function abrirSerie($id, $item, $temporada){
		$dados = array();

		$e = new Episodios();

		$episodio = $e->getEpisodioSerie($id, $item, $temporada);
		$dados['episodio'] = $episodio;

		$this->loadTemplate('episodio', $dados);
	}


}

?>