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
      $sql="SELECT * FROM category WHERE category_id='$id'";
      $query=mysqli_query($conn,$sql);
      $rows=mysqli_fetch_assoc($query);
      $nom = $rows['category_name'];
    }
  ?>
          <div id="editCategoryModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <form method="POST" action="addcategory.php?id=<?php echo $id?>">
                  <div class="modal-header">
                    <h4 class="modal-title">Edit Category</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="category_name" class="form-control" value="<?php if(isset($_GET['id'])){
                        echo $nom;
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
                    <input type="submit" name="submit" class="btn btn-info" value="Save" />
                  </div>
                </form>
              </div>
            </div>
          </div>
</body>
</html>