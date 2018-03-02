<?php  

class seriesController extends controller{

	public function index(){
		$dados = array();

		$s = new Series();
		$series = $s->getSeries();

		$dados['series'] = $series;

		$this->loadTemplate('series', $dados);
	}

}

?>