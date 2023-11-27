<?php

if(isset($_POST['submit'])){
    $nom = $_POST['projet_name'];
    $description = $_POST['projet_description'];
    $date_debut = $_POST['projet_date_debut'];
    $date_fin = $_POST['projet_date_fin'];
    $ressources_id = $_POST['ressources_id'];
    $conn = new mysqli("localhost","root","","myressources");
    $requete = "INSERT INTO projet(name,description,date_debut,date_fin,ressources_id) VALUES(
        '$nom','$description','$date_debut','$date_fin','$ressources_id')";
    $query = mysqli_query($conn,$requete);
    mysqli_close($conn);
    header("location:index.php");

}
?>
