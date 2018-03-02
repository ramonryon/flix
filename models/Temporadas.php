<?php  

class Temporadas extends model{

	public function getTemporadas($qt){
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM temporadas LIMIT $qt");
		$sql->execute();

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}

		return $array;
	}

}

?>