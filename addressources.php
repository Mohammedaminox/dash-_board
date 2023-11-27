<?php

if(isset($_POST['SUBMIT'])){
    $nom = $_POST['ressources_name'];
    $subcategory_id = $_POST['subcategory_id'];
    $conn = new mysqli("localhost","root","","myressources");
    $requete = "INSERT INTO ressources(ressources_name,subcategory_id) VALUES('$nom','$subcategory_id')";
    $query = mysqli_query($conn,$requete);
    mysqli_close($conn);
    header("location:index.php");

}
?>

