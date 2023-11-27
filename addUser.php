<?php

if(isset($_POST['submit'])){
    $nom = $_POST['name'];
    $email = $_POST['email'];
    $squad_id = $_POST['squad_id'];
    $role = $_POST['role'];
    $conn = new mysqli("localhost","root","","myressources");
    $requete = "INSERT INTO `utilisateur`(name, squad_id, role, email) VALUES(
        '$nom','$squad_id','$role','$email')";
    $query = mysqli_query($conn,$requete);
    mysqli_close($conn);
    header("location:index.php");

}
?>

