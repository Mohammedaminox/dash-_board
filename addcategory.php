<?php
      $conn = new mysqli("localhost","root","","myressources");

      if(isset($_GET['id'])){
        if(isset($_POST['submit'])){
            $nom = $_POST['category_name'];
            $category_id=$_GET['id'];
            $sql=" UPDATE category SET category_name='$nom' WHERE category_id='$category_id'";
            $query = mysqli_query($conn,$sql);
        }

      }else{
          if(isset($_POST['submit'])){
            $nom = $_POST['category_name'];
            $requete = "INSERT INTO category(category_name) VALUES('$nom')";
            $query = mysqli_query($conn,$requete);
            mysqli_close($conn);
            header("location=index.php");
          }

      }


?>


