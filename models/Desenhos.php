<?php  

class Desenhos extends model{

	public function getDesenhos(){

		$array = array();

		$sql = $this->db->prepare("SELECT * FROM desenhos WHERE id NOT IN (1,2,3,4,5,6,7,8,9,10,12,13,15,18,19,20) ORDER BY nome ASC");
		$sql->execute();

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getDesenho($id){
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM desenhos WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$array = $sql->fetch();
		}

		return $array;
	}

	
}

?>