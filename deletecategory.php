<?php

if(isset($_GET['id'])){
    $conn = new mysqli("localhost","root","","myressources");
    $requete = "DELETE FROM category WHERE category_id = " . $_GET['id'] . "";
    $query = mysqli_query($conn,$requete);
    mysqli_close($conn);
    header("location:index.php");

}
?>