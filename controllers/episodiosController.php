<?php  

class episodiosController extends controller{

	public function index(){

	}

	public function listarDesenho($desenho, $id, $temporada){
		$dados = array();

		$e = new Episodios();

		$episodios = $e->getEpisodiosDesenhos($desenho, $id, $temporada);
		$dados['episodios'] = $episodios;

		$this->loadTemplate('episodios', $dados);
	}

	public function abrirDesenho($slug, $item, $temporada){
		$dados = array();

		$e = new Episodios();

		$episodio = $e->getEpisodioDesenho($slug, $item, $temporada);
		$dados['episodio'] = $episodio;

		$this->loadTemplate('episodio', $dados);
	}

	public function listarSerie($serie, $id, $temporada){
		$dados = array();

		$e = new Episodios();

		$episodios = $e->getEpisodiosSeries($serie, $id, $temporada);
		$dados['episodios'] = $episodios;

		$this->loadTemplate('episodios', $dados);
	}

	public function abrirSerie($slug, $item, $temporada){
		$dados = array();

		$e = new Episodios();

		$episodio = $e->getEpisodioSerie($slug, $item, $temporada);
		$dados['episodio'] = $episodio;

		$this->loadTemplate('episodio', $dados);
	}


}

?>