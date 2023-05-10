<?php
include_once 'Repository.php';

class CommandeRepository extends Repository
{
    public function __construct()
    {
        parent::__construct('commande');
    }
    
    public function create($params) {
        $keys = array_keys($params);

        $keyString = implode(",", $keys);

        $paramselements = array_fill(0, count($keys), '?');
        $paramString = implode(",", $paramselements);
        $request = "INSERT INTO $this->tableName ($keyString) VALUES ($paramString);";
        $reponse = $this->db->prepare($request);
        $reponse->execute(array_values($params));
        
    }
    
}
?>