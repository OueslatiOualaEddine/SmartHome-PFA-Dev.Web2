<?php

require_once ("{$ROOT}{$DS}config{$DS}Conf.php"); 
class Model{
private static $pdo;

public static function Init(){
    $host = Conf::getHostname();
    $dbname = Conf::getDatabase();
    $login = Conf::getLogin();
    $pass = Conf::getPassword();
    try{
    self::$pdo = new 
    PDO("mysql:host=$host;dbname=$dbname",$login,$pass);
    }
    catch(PDOException $e) {
    die ($e->getMessage()); 
    }
}

public function getAll(){
    $SQL="SELECT * FROM ".static::$table;
    $rep = self::$pdo->query($SQL);
    $rep->setFetchMode(PDO::FETCH_CLASS, 'Model'. ucfirst( static::$table));
    return $rep->fetchAll();
}

public function select($cle_primaire) {
    $sql = "SELECT * from ".static::$table." WHERE ".static::$primary."=:cle_primaire";
    $req_prep = self::$pdo->prepare($sql);
    $req_prep->bindParam(":cle_primaire", $cle_primaire);
    $req_prep->execute();
    $req_prep->setFetchMode(PDO::FETCH_CLASS,'Model'. ucfirst( static::$table));
    if ($req_prep->rowCount()==0){
    return null;
    }
    else{
    $rslt = $req_prep->fetch();
    return $rslt; }
}

public function delete($cle_primaire) {
    $sql = "DELETE FROM ".static::$table." WHERE ".static::$primary."=:cle_primaire";
    $req_prep = self::$pdo->prepare($sql);
    $req_prep->bindParam(":cle_primaire", $cle_primaire);
    $req_prep->execute();
}

public function insert($tab){
    $sql = "INSERT INTO ".static::$table." VALUES(";
    foreach ($tab as $cle => $valeur){
		$sql .=" :".$cle.",";
	}
	$sql=rtrim($sql,",");
	$sql.=");";
    $req_prep = self::$pdo->prepare($sql);
    $values = array();
    foreach ($tab as $cle => $valeur)
      		$values[":".$cle] = $valeur;
    $req_prep->execute($values);
  }

public static function update($tab, $cle_primaire) {
    $sql = "UPDATE ".static::$table." SET";
    foreach ($tab as $cle => $valeur){
        $sql .=" ".$cle."=:new".$cle.",";
    }
    $sql=rtrim($sql,",");
    $sql.=" WHERE ".static::$primary."=:oldid;";
    
        $req_prep = self::$pdo->prepare($sql);
        $values = array();
    
    foreach ($tab as $cle => $valeur){
            $values[":new".$cle] = $valeur;
        }
        $values[":oldid"] = $cle_primaire;
        $req_prep->execute($values);
        $obj = self::select($tab[static::$primary]);
        return $obj;
}

}

Model::Init(); 


?>