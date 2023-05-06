<?php
require 'CnxDB.php';

$Username=htmlentities($_POST['Username']);
$Pass=htmlentities($_POST['Pass']);
$Phonenumber=htmlentities($_POST['Phonenumber']);
$Age=htmlentities($_POST['Age']);
$position=htmlentities($_POST['position']);
$email=htmlentities($_POST['email']);
$gender=htmlentities($_POST['gender']);

$cnxPDO = CnxDB::getInstance();
$requete="INSERT INTO employee (Username, Pass , Phonenumber, Age, email, gender, position) VALUES (:Username,:Pass,:Phonenumber,:Age,:email,:gender,:position)";
$req=$cnxPDO->prepare($requete);


$req->execute (
    array(
        'Username'=>$Username,
        'Pass'=>$Pass,
        'Phonenumber'=>$Phonenumber,
        'Age'=>$Age,
        'email'=>$email,
        'gender'=>$gender,
        'position'=>$position,
    )
);

?>

