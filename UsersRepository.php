<?php

include_once 'Repository.php';

class UsersRepository extends Repository
{
    public function __construct()
    {
        parent::__construct('users');
    }
    
    public function findUserById($id)
    {
        $request = "SELECT * FROM users  WHERE users_id = ?";
        $reponse = $this->db->prepare($request);
        $reponse->execute([$id]);
        return $reponse->fetch(PDO::FETCH_ASSOC);

    }

    public function delete($id) {
        $request = "DELETE  from users where users_id = ?";
        $reponse = $this->db->prepare($request);
        $reponse->execute([$id]);
    }}

?>
