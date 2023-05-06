<?php
/*// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require 'CnxDB.php';
    
    // Prepare a select statement
    $sql = "SELECT * FROM users WHERE users_uid LIKE 'wiss' ";
    
    if($stmt = $mysqli->prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if($stmt->execute()){
            $result = $stmt->get_result();
            
            if($result->num_rows == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop 
                $row = $result->fetch_array(MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $username = $row["users_uid"];
                $email = $row["users_email"];
                $phonenumber = $row["users_tel"];
                $address= $row["users_address"];




            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    $stmt->close();
    
    // Close connection
    $mysqli->close();
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();




}
*/



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

    }}
?>