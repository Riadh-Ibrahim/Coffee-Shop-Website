<?php
include_once 'Repository.php';

class CartRepository extends Repository
{
    public function __construct()
    {
        parent::__construct('cart');
    }
    
    public function findCartById($id)
    {
        $request = "SELECT product_id FROM cart WHERE user_id = ?";
        $reponse = $this->db->prepare($request);
        $reponse->execute([$id]);
        return $reponse->fetchAll(PDO::FETCH_COLUMN);
    }
    public function findNProductsById($id)
    {
        $request = "SELECT count(product_id) FROM cart WHERE user_id = ? GROUP BY user_id";
        $reponse = $this->db->prepare($request);
        $reponse->execute([$id]);
        return $reponse->fetchColumn();
    }
    public function create($params) {
        $keys = array_keys($params);

        $keyString = implode(",", $keys);

        $paramselements = array_fill(0, count($keys), '?');
        $paramString = implode(",", $paramselements);
        $request = "INSERT INTO $this->tableName ($keyString) VALUES ($paramString);";
        $reponse = $this->db->prepare($request);
        $reponse->execute(array_values($params));
        return $reponse->fetch(PDO::FETCH_OBJ);
    }
    public function delete($id) {
        $request = "delete from $this->tableName where  user_id = ?";
        $reponse = $this->db->prepare($request);
        $reponse->execute([$id]);
    }
    
}

// Example usage:

?>