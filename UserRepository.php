<?php
include_once './Repository.php';
include_once './CnxDB.php';
class UserRepository extends Repository
{
    public function __construct()
    {
        parent::__construct('users');
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
    public function update($id, $params)
    {
        $request = "UPDATE $this->tableName SET users_points = ? WHERE users_id = ?";
        $response = $this->db->prepare($request);
        $response->execute([$params, $id]);
    }
    public function findUserPointsById($id)
    {
        $request = "SELECT users_points FROM users WHERE users_id = ?";
        $reponse = $this->db->prepare($request);
        $reponse->execute([$id]);
        return $reponse->fetchColumn();
    }
    public function findHighestScore() {

        $request = "select * from $this->tableName order by users_points desc";
        $reponse = $this->db->prepare($request);
        $reponse->execute([]);
        return $reponse->fetchAll(PDO::FETCH_OBJ);
    }
    public function findUserEmailById($id)
    {
        $request = "SELECT users_email FROM users WHERE users_id = ?";
        $reponse = $this->db->prepare($request);
        $reponse->execute([$id]);
        return $reponse->fetchColumn();
    }
}