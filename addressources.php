<?php
    $conn = new mysqli("localhost","root","","myressources");
if(isset($_GET['id'])){
    if(isset($_POST['submit'])){

        $nom = $_POST['ressources_name'];
        $subcategory_id = $_POST['subcategory_id'];
        $ressources_id=$_GET['id'];
        $sql=" UPDATE ressources SET ressources_name='$nom',subcategory_id='$subcategory_id' WHERE ressources_id='$ressources_id'";
        $query = mysqli_query($conn,$sql);
    }
}else{
    if(isset($_POST['SUBMIT'])){
        $nom = $_POST['ressources_name'];
        $subcategory_id = $_POST['subcategory_id'];
        $requete = "INSERT INTO ressources(ressources_name,subcategory_id) VALUES('$nom','$subcategory_id')";
        $query = mysqli_query($conn,$requete);
        mysqli_close($conn);
        header("location:index.php");
    
    }

}

?>
