
<?php
  // dichiarazione nuova classe
  class connexionDB {
    private $host='';  // nome host
    private $name='';    // nome del bd
    private $user='';     // utente
    private $pass='';     // password
  
    private $connexion;
                    
    function __construct($host=null,$name=null, $user=null,$pass=null){
      if($host != null){
        $this->host=$host;           
        $this->name=$name;           
        $this->user=$user;          
        $this->pass=$pass;
      }
      try{
        $this->connexion = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->name,
          $this->user, $this->pass,array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8', 
          PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
      }catch (PDOException $e){
        echo 'Erreur : Impossibile collegarsi al db !';
        die();
      }
    }
    
    public function query($sql, $data=array()){
      $req = $this->connexion->prepare($sql); // prepara la richiesta all'esecuzione e ritorna un oggetto
      $req->execute($data);
      return $req;
    }
    
    public function insert($sql, $data = array()){
      $req =$this->connexion->prepare($sql);
      $req->execute($data);
    }
  }
  
  // connessione alla nostra funzione
  $DB = new connexionDB();
?>