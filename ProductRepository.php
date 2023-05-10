<?php
include_once 'Repository.php';

class ProductRepository extends Repository
{
    public function __construct()
    {
        parent::__construct('products');
    }
    
    public function findProductById($id)
    {
        $request = "SELECT *FROM products WHERE product_id = ?";
        $reponse = $this->db->prepare($request);
        $reponse->execute([$id]);
        return $reponse->fetch(PDO::FETCH_ASSOC);
    }
}

// Example usage:

?>