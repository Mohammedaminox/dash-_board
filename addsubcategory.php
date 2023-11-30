<?php
$conn = new mysqli("localhost","root","","myressources");
if(isset($_GET['id'])){
    if(isset($_POST['submit'])){
        $nom = $_POST['subcategory_name'];
        $category_id = $_POST['category_id'];
        $subcategory_id=$_GET['id'];
        $sql=" UPDATE subcategory SET subcategory_name='$nom',category_id='$category_id' WHERE subcategory_id='$subcategory_id'";
        $query = mysqli_query($conn,$sql);
    }
}else{

    if(isset($_POST['SUBMIT'])){
        $nom = $_POST['subcategory_name'];
        $category_id = $_POST['category_id'];
        $requete = "INSERT INTO subcategory(subcategory_name,category_id) VALUES(
            '$nom','$category_id')";
        $query = mysqli_query($conn,$requete);
        mysqli_close($conn);
        header("location:index.php");
    
    }
}

?>
