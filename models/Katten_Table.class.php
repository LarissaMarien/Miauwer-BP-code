<?php
  class Katten_Table {
    private $db;
    public function __construct ($db) {
      $this->db = $db;
    }
    public function index() {
      $sql = "SELECT * FROM katten";
      $statement = $this->db->prepare($sql);
      $statement->execute();
      return $statement;
    }
    public function geefEnkele($id) {
      $sql = "SELECT * FROM katten WHERE id = ?";
      $statement = $this->db->prepare($sql);
			$data = array($id);
      $statement->execute($data);
			$kat = $statement->fetchObject();
      return $kat;
    }
    public function geefEerste() {
      $sql = "SELECT * FROM katten LIMIT 1";
      $statement = $this->db->prepare($sql);
      $statement->execute();
      return $statement;
    }
    public function geefSwipeEerste($id) {
      $sql = "SELECT * FROM katten WHERE id = ?";
      $statement = $this->db->prepare($sql);
			$data = array($id);
      $statement->execute($data);
			$swipekat = $statement->fetchObject();
      return $swipekat;
    }
    public function filtergeslachtkater() {
      $sql = "SELECT * FROM katten WHERE geslacht='kater'";
      $statement = $this->db->prepare($sql);
      $statement->execute();
      return $statement;
    }
    public function filtergeslachtkattin() {
      $sql = "SELECT * FROM katten WHERE geslacht='kattin'";
      $statement = $this->db->prepare($sql);
      $statement->execute();
      return $statement;
    }
    public function filteromgangkatten() {
      $sql = "SELECT * FROM katten WHERE omgangkatten='ja'";
      $statement = $this->db->prepare($sql);
      $statement->execute();
      return $statement;
    }
    public function filteromganghonden() {
      $sql = "SELECT * FROM katten WHERE omganghonden='ja'";
      $statement = $this->db->prepare($sql);
      $statement->execute();
      return $statement;
    }
    public function filteromgangkinderen() {
      $sql = "SELECT * FROM katten WHERE omgangkinderen='ja'";
      $statement = $this->db->prepare($sql);
      $statement->execute();
      return $statement;
    }
  }
?>
