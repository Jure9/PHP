<?php

class Connect
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "blog";
    
    private $connection;
 
    
    public function __construct()
    {
         $this->connection = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
         //thiss se nanaša na class instance
        
         $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    public function getAll($tablename)
    {
        return $this->connection->query("SELECT * FROM $tablename");
    }
   
    
    public function setPost($title, $usser, $text)
    {
        $statement = $this->connection->prepare("INSERT INTO uporabnik(ussername, sporocilo, naslov) VALUES(:ussername, :sporocilo,                   :naslov)");

        
        $statement->execute(array(
        ':ussername' => $usser,
        ':sporocilo' => $text,
        ':naslov' => $title
        ));
    }
}

?>
