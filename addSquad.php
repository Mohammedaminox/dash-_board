<?php
  if(isset($_POST['Submit'])){
    $nom = $_POST['projet_name'];
    $projet_id = $_POST['projet_id'];
    $conn = new mysqli("localhost","root","","myressources");
    $requete = "INSERT INTO `squad`(name,projet_id) VALUES(
        '$nom','$projet_id')";
    $query = mysqli_query($conn,$requete);
    mysqli_close($conn);
    header("location=index.php");
  }
?>
