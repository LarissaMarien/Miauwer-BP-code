<?php
class Gebruiker_Table {
    protected $db;
    public function __construct ( $db ) {
        $this->db = $db;
    }
    public function create($voornaam,$naam,$geboortedatum,$beroep,$gezinsleden,$kinderen,$allergisch,$woning,$tuin,$omgeving,$verblijf,$kattengehad,$aantalkatten,$aantalhonden,$aantalandere,$profielfoto,$email,$paswoord) {
        $this->checkEmail($email);
        $sql = "INSERT INTO gebruiker (voornaam,naam,geboortedatum,beroep,gezinsleden,kinderen,allergisch,woning,tuin,omgeving,verblijf,kattengehad,aantalkatten,aantalhonden,aantalandere,profielfoto,email,paswoord)
                VALUES( ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?, MD5(?))";
        $data= array($voornaam,$naam,$geboortedatum,$beroep,$gezinsleden,$kinderen,$allergisch,$woning,$tuin,$omgeving,$verblijf,$kattengehad,$aantalkatten,$aantalhonden,$aantalandere,$profielfoto,$email,$paswoord);
				$statement = $this->db->prepare($sql);
        $statement->execute($data);
        return $statement;
    }
    private function checkEmail($email) {
        $sql = "SELECT email FROM gebruiker WHERE email = ?";
        $data = array($email);
				$statement = $this->db->prepare($sql);
        $statement->execute($data);
        if ( $statement->rowCount() === 1 ) {
            $e = new Exception("Probleem: '$email' is reeds in gebruik!");
            throw $e;
        }
    }
    public function checkCredentials ($email, $paswoord){
        $sql = "SELECT email,paswoord,id FROM gebruiker
                WHERE email = ? AND paswoord = MD5(?)";
        $data = array($email,$paswoord);
				$statement = $this->db->prepare($sql);
        $statement->execute($data);
        if ($statement->rowCount() === 1 ) {
            $model = $statement->fetchObject();
            $out = $model; //->gebruikersnaam;
        } else {
            $loginProblem = new Exception( "Inloggen mislukt!" );
            throw $loginProblem;
        }
        return $out;
    }

    public function geefEnkele($id) {
      $sql = "SELECT *, DATE_FORMAT(geboortedatum,'%d-%m-%Y') AS gebdatum FROM gebruiker WHERE id = ?";
      $statement = $this->db->prepare($sql);
			$data = array($id);
      $statement->execute($data);
			$gebruiker = $statement->fetchObject();
      return $gebruiker;
    }

    public function wijzig($id,$voornaam,$naam,$geboortedatum,$beroep,$gezinsleden,$kinderen,$allergisch,$woning,$tuin,$omgeving,$verblijf,$kattengehad,$aantalkatten,$aantalhonden,$aantalandere,$profielfoto,$email,$paswoord) {
      $sql = "UPDATE gebruiker SET voornaam  = ?, naam = ?,  geboortedatum = ?, beroep = ?, gezinsleden = ?, kinderen = ?, allergisch =?, woning = ?, tuin = ?, omgeving = ?, verblijf = ?, kattengehad = ?, aantalkatten =?, aantalhonden = ?, aantalandere = ?, profielfoto = ?, email = ?, paswoord = ? WHERE id = ?";
      $statement = $this->db->prepare($sql);
      $data = array($voornaam,$naam,$geboortedatum,$beroep,$gezinsleden,$kinderen,$allergisch,$woning,$tuin,$omgeving,$verblijf,$kattengehad,$aantalkatten,$aantalhonden,$aantalandere,$profielfoto,$email,$paswoord,$id);
			$statement->execute($data);
    }

}
