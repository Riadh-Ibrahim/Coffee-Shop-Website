<?php
include_once './Repository.php';
include_once './CnxDB.php';
class UserRepository extends Repository
{
    public function __construct()
    {
        parent::__construct('employee');
    }

    public function findSpeciale($specialParams)
    {

    }

    public function create($params) {
        $keys = array_keys($params);

        $keyString = implode(",", $keys);

        $paramselements = array_fill(0, count($keys), '?');
        $paramString = implode(",", $paramselements);
        $request = "INSERT INTO $this->tableName (Username, $keyString) VALUES (NULL, $paramString);";
        $reponse = $this->db->prepare($request);
        $reponse->execute(array_values($params));
        return $reponse->fetch(PDO::FETCH_OBJ);
    }
}