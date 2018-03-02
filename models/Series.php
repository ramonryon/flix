<?php  

class Series extends model{

	public function getSeries(){

		$array = array();

		$sql = $this->db->prepare("SELECT * FROM series WHERE id NOT IN (1,3,4,5,6,7,8,9,10,11,12,15,17,19,20) ORDER BY nome ASC");

		$sql->execute();

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getSerie($slug){
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM series WHERE slug = :slug");
		$sql->bindValue(":slug", $slug);
		$sql->execute();

		if($sql->rowCount() > 0){
			$array = $sql->fetch();
		}

		return $array;
	}
}

?>