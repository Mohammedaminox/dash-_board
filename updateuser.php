<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
</head>
<body>
  <?php
    $conn = new mysqli("localhost","root","","myressources");
    if(isset($_GET['id'])){
      $id=$_GET['id'];
      $sql="SELECT * FROM utilisateur WHERE user_id='$id'";
      $query=mysqli_query($conn,$sql);
      $rows=mysqli_fetch_assoc($query);
      $nom = $rows['name'];
      $email = $rows['email'];
      $squad_id = $rows['squad_id'];
      $role = $rows['role'];
    }
  ?>
<div id="editUserModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <form method="POST" action="addUser.php?id=<?php echo $id?>">
                  <div class="modal-header">
                    <h4 class="modal-title">Edit User</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="name" class="form-control" value="<?php if(isset($_GET['id'])){
                        echo $nom;
                      } ?>" required />
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control" value="<?php if(isset($_GET['id'])){
                        echo $email;
                      } ?>" required />
                    </div>
                    <div class="form-group">
                      <label>Role</label>
                      <input type="text" name="role" class="form-control" value="<?php if(isset($_GET['id'])){
                        echo $role;
                      } ?>" required />
                    </div>
                    <div class="form-group">
                      <label>Squad_id</label>
                      <input type="text" name="squad_id" class="form-control" value="<?php if(isset($_GET['id'])){
                        echo $squad_id;
                      } ?>" required />
                    </div>
                  </div>
                  <div class="modal-footer">
                    <input
                      type="button"
                      class="btn btn-default"
                      data-dismiss="modal"
                      value="Cancel"
                    />
                    <input type="submit" name="submitupdate" class="btn btn-info" value="Save" />
                  </div>
                </form>
              </div>
            </div>
          </div>
</body>
</html>