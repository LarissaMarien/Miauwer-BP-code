<?php
  class Gebruikerkat_Table {
    private $db;
    public function __construct ($db) {
      $this->db = $db;
    }
    public function likekat($gebruiker_id,$kat_id,$liked) {
      $sql = "INSERT INTO gebruikerkat (gebruiker_id,kat_id,liked) VALUES (?,?,?)";
      $data= array($gebruiker_id,$kat_id,$liked);
      $statement = $this->db->prepare($sql);
      $statement->execute($data);
      return $statement;
    }
    public function wijziglike($id,$gebruiker_id,$kat_id,$liked) {
      $sql = "UPDATE gebruikerkat SET gebruiker_id = ?, kat_id = ?, liked = NULL WHERE id = ?";
      $statement = $this->db->prepare($sql);
      $data = array($gebruiker_id,$kat_id,$liked,$id);
			$statement->execute($data);
    }
    public function geefEnkele($id) {
      $sql = "SELECT * FROM gebruikerkat WHERE id = ?";
      $statement = $this->db->prepare($sql);
			$data = array($id);
      $statement->execute($data);
			$gebkat = $statement->fetchObject();
      return $gebkat;
    }
    public function geefVorige($id) {
      $sql = "SELECT * FROM gebruikerkat WHERE id = ?";
      $statement = $this->db->prepare($sql);
      $data = array($id);
      $statement->execute($data);
      $kat = $statement->fetchObject();
      return $kat;
    }
    public function likedinner($gebruiker_id) {
      $sql = "SELECT distinct gebruikerkat.kat_id, katten.voornaam, katten.naamasiel, katten.foto FROM gebruikerkat INNER JOIN katten ON gebruikerkat.kat_id = katten.id WHERE gebruiker_id = ?";
      $statement = $this->db->prepare($sql);
      $data = array($gebruiker_id);
      $statement->execute($data);
      return $statement;
    }
    public function verwijder($gebruiker_id,$kat_id) {
			$sql = "DELETE FROM gebruikerkat WHERE gebruiker_id = ? AND kat_id = ?";
			$statement = $this->db->prepare($sql);
			$data = array($gebruiker_id,$kat_id);
      $statement->execute($data);
		}
  }
?>
