<?php

if(isset($_POST['SUBMIT'])){
    $nom = $_POST['subcategory_name'];
    $category_id = $_POST['category_id'];
    $conn = new mysqli("localhost","root","","myressources");
    $requete = "INSERT INTO subcategory(subcategory_name,category_id) VALUES(
        '$nom','$category_id')";
    $query = mysqli_query($conn,$requete);
    mysqli_close($conn);
    header("location:index.php");

}
?>