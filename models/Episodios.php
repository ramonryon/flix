<?php  

class Episodios extends model{

	public function getEpisodiosDesenhos($desenho, $temporada){
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM episodios WHERE id_desenho = $desenho AND id_temporada = $temporada ORDER BY nome ASC");
		$sql->execute();

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getEpisodioDesenho($id, $desenho, $temporada){
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM episodios WHERE id = $id AND id_desenho = $desenho AND id_temporada = $temporada");
		$sql->execute();

		if($sql->rowCount() > 0){
			$array = $sql->fetch();
		}

		return $array;
	}

	public function getEpisodiosSeries($serie, $temporada){
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM episodios WHERE id_serie = $serie AND id_temporada = $temporada  ORDER BY nome ASC");
		$sql->execute();

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getEpisodioSerie($id, $serie, $temporada){
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM episodios WHERE id = $id AND id_serie = $serie AND id_temporada = $temporada");
		$sql->execute();

		if($sql->rowCount() > 0){
			$array = $sql->fetch();
		}

		return $array;
	}
	
}

?>