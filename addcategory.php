<?php
  if(isset($_POST['submit'])){
    $nom = $_POST['category_name'];
    $conn = new mysqli("localhost","root","","myressources");
    $requete = "INSERT INTO category(category_name) VALUES('$nom')";
    $query = mysqli_query($conn,$requete);
    mysqli_close($conn);
    header("location=index.php");
  }
?>