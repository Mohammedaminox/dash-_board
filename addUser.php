<?php
$conn = new mysqli("localhost","root","","myressources");
if(isset($_GET['id'])){
    if(isset($_POST['submitupdate'])){

        $nom = $_POST['name'];
        $email = $_POST['email'];
        $squad_id = $_POST['squad_id'];
        $role = $_POST['role'];
        $user_id=$_GET['id'];
        $sql="UPDATE utilisateur SET name='$nom',squad_id='$squad_id',role='$role',email='$email' WHERE user_id='$user_id'";
        $query = mysqli_query($conn,$sql);
    }


}else{
    if(isset($_POST['submit'])){
        $nom = $_POST['name'];
        $email = $_POST['email'];
        $squad_id = $_POST['squad_id'];
        $role = $_POST['role'];
        $requete = "INSERT INTO `utilisateur`(name, squad_id, role, email) VALUES(
            '$nom','$squad_id','$role','$email')";
        $query = mysqli_query($conn,$requete);
        mysqli_close($conn);
        header("location:index.php");
    
    }

}

?>

