<?php
include_once 'CnxDB.php';
abstract class Repository
{
    protected PDO $db;

    public function __construct(protected $tableName) {
        $this->db = CnxDB::getInstance();
    }


    public function findAll() {

        $request = "select * from $this->tableName";
        $reponse = $this->db->prepare($request);
        $reponse->execute([]);
        return $reponse->fetchAll(PDO::FETCH_OBJ);
    }


    public function findByName($name){
        $request = "select * from $this->tableName where name= ?";
        $reponse = $this->db->prepare($request);
        $reponse->execute([$name]);
        return $reponse->fetch(PDO::FETCH_OBJ);
    }

    public function create($params) {
        $keys = array_keys($params);

        $keyString = implode(",", $keys);

        $paramselements = array_fill(0, count($keys), '?');
        $paramString = implode(",", $paramselements);
        $request = "INSERT INTO $this->tableName (id, $keyString) VALUES (NULL, $paramString);";
        $reponse = $this->db->prepare($request);
        $reponse->execute(array_values($params));
        return $reponse->fetch(PDO::FETCH_OBJ);
    }


    public function delete($id) {
        $request = "delete from $this->tableName where id = ?";
        $reponse = $this->db->prepare($request);
        $reponse->execute([$id]);
    }


    public function update($id, $params) {}

}
?>