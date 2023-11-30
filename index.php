<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Bootstrap CRUD Data Table for Database with Modal Form</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>

    <style>
      body {
        color: #566787;
        background: #f5f5f5;
        font-family: "Varela Round", sans-serif;
        font-size: 13px;
      }

      .table-responsive {
        margin: 30px 0;
      }

      .table-wrapper {
        background: #fff;
        padding: 20px 25px;
        border-radius: 3px;
        min-width: 1000px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
      }

      .table-title {
        padding-bottom: 15px;
        background: #435d7d;
        color: #fff;
        padding: 16px 30px;
        min-width: 100%;
        margin: -20px -25px 10px;
        border-radius: 3px 3px 0 0;
      }

      .table-title h2 {
        margin: 5px 0 0;
        font-size: 24px;
      }

      .table-title .btn-group {
        float: right;
      }

      .table-title .btn {
        color: #fff;
        float: right;
        font-size: 13px;
        border: none;
        min-width: 50px;
        border-radius: 2px;
        border: none;
        outline: none !important;
        margin-left: 10px;
      }

      .table-title .btn i {
        float: left;
        font-size: 21px;
        margin-right: 5px;
      }

      .table-title .btn span {
        float: left;
        margin-top: 2px;
      }

      table.table tr th,
      table.table tr td {
        border-color: #e9e9e9;
        padding: 12px 15px;
        vertical-align: middle;
      }

      table.table tr th:first-child {
        width: 60px;
      }

      table.table tr th:last-child {
        width: 100px;
      }

      table.table-striped tbody tr:nth-of-type(odd) {
        background-color: #fcfcfc;
      }

      table.table-striped.table-hover tbody tr:hover {
        background: #f5f5f5;
      }

      table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
      }

      table.table td:last-child i {
        opacity: 0.9;
        font-size: 22px;
        margin: 0 5px;
      }

      table.table td a {
        font-weight: bold;
        color: #566787;
        display: inline-block;
        text-decoration: none;
        outline: none !important;
      }

      table.table td a:hover {
        color: #2196f3;
      }

      table.table td a.edit {
        color: #ffc107;
      }

      table.table td a.delete {
        color: #f44336;
      }

      table.table td i {
        font-size: 19px;
      }

      table.table .avatar {
        border-radius: 50%;
        vertical-align: middle;
        margin-right: 10px;
      }

      .pagination {
        float: right;
        margin: 0 0 5px;
      }

      .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
      }

      .pagination li a:hover {
        color: #666;
      }

      .pagination li.active a,
      .pagination li.active a.page-link {
        background: #03a9f4;
      }

      .pagination li.active a:hover {
        background: #0397d6;
      }

      .pagination li.disabled i {
        color: #ccc;
      }

      .pagination li i {
        font-size: 16px;
        padding-top: 6px;
      }

      .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
      }
      /* Custom checkbox */
      .custom-checkbox {
        position: relative;
      }

      .custom-checkbox input[type="checkbox"] {
        opacity: 0;
        position: absolute;
        margin: 5px 0 0 3px;
        z-index: 9;
      }

      .custom-checkbox label:before {
        width: 18px;
        height: 18px;
      }

      .custom-checkbox label:before {
        content: "";
        margin-right: 10px;
        display: inline-block;
        vertical-align: text-top;
        background: white;
        border: 1px solid #bbb;
        border-radius: 2px;
        box-sizing: border-box;
        z-index: 2;
      }

      .custom-checkbox input[type="checkbox"]:checked + label:after {
        content: "";
        position: absolute;
        left: 6px;
        top: 3px;
        width: 6px;
        height: 11px;
        border: solid #000;
        border-width: 0 3px 3px 0;
        transform: inherit;
        z-index: 3;
        transform: rotateZ(45deg);
      }

      .custom-checkbox input[type="checkbox"]:checked + label:before {
        border-color: #03a9f4;
        background: #03a9f4;
      }

      .custom-checkbox input[type="checkbox"]:checked + label:after {
        border-color: #fff;
      }

      .custom-checkbox input[type="checkbox"]:disabled + label:before {
        color: #b8b8b8;
        cursor: auto;
        box-shadow: none;
        background: #ddd;
      }

      /* Modal styles */
      .modal .modal-dialog {
        max-width: 400px;
      }

      .modal .modal-header,
      .modal .modal-body,
      .modal .modal-footer {
        padding: 20px 30px;
      }

      .modal .modal-content {
        border-radius: 3px;
        font-size: 14px;
      }

      .modal .modal-footer {
        background: #ecf0f1;
        border-radius: 0 0 3px 3px;
      }

      .modal .modal-title {
        display: inline-block;
      }

      .modal .form-control {
        border-radius: 2px;
        box-shadow: none;
        border-color: #dddddd;
      }

      .modal textarea.form-control {
        resize: vertical;
      }

      .modal .btn {
        border-radius: 2px;
        min-width: 100px;
      }

      .modal form label {
        font-weight: normal;
      }

      /* Style for the container holding the statistics cards */
#nav-statistique {
  display: flex;
  justify-content: space-around;
  padding: 20px;
}

/* Style for each statistics card */
.statics_card {
  background-color: #f0f0f0;
  border-radius: 8px;
  padding: 20px;
  text-align: center;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease-in-out;
}

.statics_card:hover {
  transform: scale(1.05);
}

/* Style for the icons inside the cards */
.statics_card i {
  font-size: 40px;
  margin-bottom: 10px;
}

/* Style for the title of each statistics card */
.static_info h5 {
  font-size: 18px;
  margin-bottom: 10px;
}

/* Style for the number/count in each statistics card */
.static_info p {
  font-size: 24px;
  font-weight: bold;
  color: #3498db; /* or your preferred color */
}

   </style>
    <script>
      $(document).ready(function () {
        // Activate tooltip
        $('[data-toggle="tooltip"]').tooltip();

        // Select/Deselect checkboxes
        var checkbox = $('table tbody input[type="checkbox"]');
        $("#selectAll").click(function () {
          if (this.checked) {
            checkbox.each(function () {
              this.checked = true;
            });
          } else {
            checkbox.each(function () {
              this.checked = false;
            });
          }
        });
        checkbox.click(function () {
          if (!this.checked) {
            $("#selectAll").prop("checked", false);
          }
        });
      });
    </script>
  </head>

  <body>
    <?php
      $conn = new mysqli("localhost","root","","myressources");
      $results_user = $conn-> query("SELECT * FROM utilisateur");
      $results_ressources = $conn-> query("SELECT * FROM ressources");
      $results_category = $conn-> query("SELECT * FROM category");
      $results_SubCategory = $conn-> query("SELECT * FROM subcategory");
      
    ?>
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button
          class="nav-link active"
          id="nav-User-tab"
          data-bs-toggle="tab"
          data-bs-target="#nav-User"
          type="button"
          role="tab"
          aria-controls="nav-User"
          aria-selected="true"
        >
          Utilisateur
        </button>
        <button
          class="nav-link"
          id="nav-Ressources-tab"
          data-bs-toggle="tab"
          data-bs-target="#nav-Ressources"
          type="button"
          role="tab"
          aria-controls="nav-Ressources"
          aria-selected="false"
        >
          Ressources
        </button>
        <button
          class="nav-link"
          id="nav-Category-tab"
          data-bs-toggle="tab"
          data-bs-target="#nav-Category"
          type="button"
          role="tab"
          aria-controls="nav-Category"
          aria-selected="false"
        >
          Categorie
        </button>
        <button
          class="nav-link"
          id="nav-SubCategory-tab"
          data-bs-toggle="tab"
          data-bs-target="#nav-SubCategory"
          type="button"
          role="tab"
          aria-controls="nav-SubCategory"
          aria-selected="false"
        >
          SubCategorie
        </button>
        <button
          class="nav-link"
          id="nav-statistique-tab"
          data-bs-toggle="tab"
          data-bs-target="#nav-statistique"
          type="button"
          role="tab"
          aria-controls="nav-statistique"
          aria-selected="false"
        >
          statistique
        </button>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div
        class="tab-pane fade show active"
        id="nav-User"
        role="tabpanel"
        aria-labelledby="nav-User-tab"
      >
        <div class="all">
          <div class="container-xl">
            <div class="table-responsive">
              <div class="table-wrapper">
                <div class="table-title">
                  <div class="row">
                    <div class="col-sm-6">
                      <h2>Manage <b>Utilisateur</b></h2>
                    </div>
                    <div class="col-sm-6">
                      <a
                        href="#addUserModal"
                        class="btn btn-success"
                        data-toggle="modal"
                        ><i class="material-icons">&#xE147;</i>
                        <span>Add New User</span></a
                      >
                    </div>
                  </div>
                </div>
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>
                        <span class="custom-checkbox">
                          <input type="checkbox" id="selectAll" />
                          <label for="selectAll"></label>
                        </span>
                      </th>
                      <th>User_ID</th>
                      <th>Name</th>
                      <th>Squad_id</th>
                      <th>Role</th>
                      <th>Email</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      while($row = $results_user -> fetch_assoc()){
                        echo '<tr>
                        <td>
                          <span class="custom-checkbox">
                            <input
                              type="checkbox"
                              id="checkbox5"
                              name="options[]"
                              value="1"
                            />
                            <label for="checkbox5"></label>
                          </span>
                        </td>
                        <td>' . $row["user_id"] . '</td>
                        <td>' . $row["name"] . '</td>
                        <td>' . $row["squad_id"] . '</td>
                        <td>' . $row["role"] . '</td>
                        <td>' . $row["email"] . '</td>
                        <td>
                          <a
                            href="updateuser.php?id=' . $row["user_id"] . '"
                            class="edit"
                            ><i
                              class="material-icons"
                              title="Edit"
                              >&#xE254;</i
                            ></a
                          >
                          <a
                            href="deleteUser.php?id=' . $row["user_id"] . '"
                            class="delete"
                            ><i
                              class="material-icons"
                              title="Delete"
                              >&#xE872;</i
                            ></a
                          >
                        </td>
                      </tr>';
                      }
                    ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- Edit Modal HTML -->
          <div id="addUserModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">


                <form method="POST" action="addUser.php">
                  <div class="modal-header">
                    <h4 class="modal-title">Add User</h4>
                    <button
                      type="button"
                      class="close"
                      data-dismiss="modal"
                      aria-hidden="true"
                    >
                      &times;
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="name" class="form-control" required />
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control" required />
                    </div>
                    <div class="form-group">
                      <label>Squad_id</label>
                      <input type="number" name="squad_id" class="form-control" required />
                    </div>
                    <div class="form-group">
                      <label>Role</label>
                      <input type="text" name="role" class="form-control" required />
                    </div>
                  </div>
                  <div class="modal-footer">
                    <input
                      type="button"
                      class="btn btn-default"
                      data-dismiss="modal"
                      value="Cancel"
                    />
                    <input type="submit" name="submit"  class="btn btn-success" value="Add" />
                  </div>
                </form>


              </div>
            </div>
          </div>
          <!-- Edit Modal HTML -->
        </div>
      </div>
      <div
        class="tab-pane fade"
        id="nav-Squad"
        role="tabpanel"
        aria-labelledby="nav-Squad-tab"
      >
      </div>
      <div
        class="tab-pane fade"
        id="nav-Projet"
        role="tabpanel"
        aria-labelledby="nav-Projet-tab"
      >
      </div>
      <div
        class="tab-pane fade"
        id="nav-Ressources"
        role="tabpanel"
        aria-labelledby="nav-Ressources-tab"
      >
        <div class="all">
          <div class="container-xl">
            <div class="table-responsive">
              <div class="table-wrapper">
                <div class="table-title">
                  <div class="row">
                    <div class="col-sm-6">
                      <h2>Manage <b>Ressources</b></h2>
                    </div>
                    <div class="col-sm-6">
                      <a
                        href="#addRessourcesModal"
                        class="btn btn-success"
                        data-toggle="modal"
                        ><i class="material-icons">&#xE147;</i>
                        <span>Add New Ressources</span></a
                      >
                    </div>
                  </div>
                </div>
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>
                        <span class="custom-checkbox">
                          <input type="checkbox" id="selectAll" />
                          <label for="selectAll"></label>
                        </span>
                      </th>
                      <th>Ressources_ID</th>
                      <th>Name</th>
                      <th>SubCategorie_id</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      while($row = $results_ressources -> fetch_assoc()){
                        echo '                   <tr>
                        <td>
                          <span class="custom-checkbox">
                            <input
                              type="checkbox"
                              id="checkbox1"
                              name="options[]"
                              value="1"
                            />
                            <label for="checkbox1"></label>
                          </span>
                        </td>
                        <td>' . $row["ressources_id"] . '</td>
                        <td>' . $row["ressources_name"] . '</td>
                        <td>' . $row["subcategory_id"] . '</td>
                        <td>
                          <a
                            href="updateressources.php?id=' . $row["ressources_id"] . '"
                            class="edit"
                            ><i
                              class="material-icons"
                              title="Edit"
                              >&#xE254;</i
                            ></a
                          >
                          <a
                            href="deleteressources.php?id=' . $row["ressources_id"] . '"
                            class="delete"
                            ><i
                              class="material-icons"
                              title="Delete"
                              >&#xE872;</i
                            ></a
                          >
                        </td>
                      </tr>';
                      };
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- Edit Modal HTML -->
          <div id="addRessourcesModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <form method="POST" action="addressources.php">
                  <div class="modal-header">
                    <h4 class="modal-title">Add Ressources</h4>
                    <button
                      type="button"
                      class="close"
                      data-dismiss="modal"
                      aria-hidden="true"
                    >
                      &times;
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="ressources_name" class="form-control" required />
                    </div>
                    <div class="form-group">
                      <label>SubCategorie_id</label>
                      <input type="text" name="subcategory_id" class="form-control" required />
                    </div>
                  </div>
                  <div class="modal-footer">
                    <input
                      type="button"
                      class="btn btn-default"
                      data-dismiss="modal"
                      value="Cancel"
                    />
                    <input type="submit" name="SUBMIT" class="btn btn-success" value="Add" />
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="tab-pane fade"
        id="nav-Category"
        role="tabpanel"
        aria-labelledby="nav-Category-tab"
      >
        <div class="all">
          <div class="container-xl">
            <div class="table-responsive">
              <div class="table-wrapper">
                <div class="table-title">
                  <div class="row">
                    <div class="col-sm-6">
                      <h2>Manage <b>Category</b></h2>
                    </div>
                    <div class="col-sm-6">
                      <a
                        href="#addCategoryModal"
                        class="btn btn-success"
                        data-toggle="modal"
                        ><i class="material-icons">&#xE147;</i>
                        <span>Add New Category</span></a
                      >

                    </div>
                  </div>
                </div>
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>
                        <span class="custom-checkbox">
                          <input type="checkbox" id="selectAll" />
                          <label for="selectAll"></label>
                        </span>
                      </th>
                      <th>Category_ID</th>
                      <th>Name</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      while($row = $results_category -> fetch_assoc()){
                        echo '                    <tr>
                        <td>
                          <span class="custom-checkbox">
                            <input
                              type="checkbox"
                              id="checkbox1"
                              name="options[]"
                              value="1"
                            />
                            <label for="checkbox1"></label>
                          </span>
                        </td>
                        <td>' . $row["category_id"] .'</td>
                        <td>' . $row["category_name"] . '</td>
                        <td>
                          <a
                            href="updatecategory.php?id=' . $row["category_id"] . '"
                            class="edit"
                            ><i
                              class="material-icons"
                              title="Edit"
                              >&#xE254;</i
                            ></a
                          >
                          <a
                            href="deletecategory.php?id=' . $row["category_id"] . '"
                            class="delete"
                            ><i
                              class="material-icons"
                              title="Delete"
                              >&#xE872;</i
                            ></a
                          >
                        </td>
                      </tr>';
                      };
                    ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- Edit Modal HTML -->
          <div id="addCategoryModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <form method="POST" action="addcategory.php">
                  <div class="modal-header">
                    <h4 class="modal-title">Add Category</h4>
                    <button
                      type="button"
                      class="close"
                      data-dismiss="modal"
                      aria-hidden="true"
                    >
                      &times;
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="category_name" class="form-control" required />
                    </div>
                  </div>
                  <div class="modal-footer">
                    <input
                      type="button"
                      class="btn btn-default"
                      data-dismiss="modal"
                      value="Cancel"
                    />
                    <input type="submit" name="submit" class="btn btn-success" value="Add" />
                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div
        class="tab-pane fade"
        id="nav-SubCategory"
        role="tabpanel"
        aria-labelledby="nav-SubCategory-tab"
      >
        <div class="all">
          <div class="container-xl">
            <div class="table-responsive">
              <div class="table-wrapper">
                <div class="table-title">
                  <div class="row">
                    <div class="col-sm-6">
                      <h2>Manage <b>SubCategory</b></h2>
                    </div>
                    <div class="col-sm-6">
                      <a
                        href="#addSubCategoryModal"
                        class="btn btn-success"
                        data-toggle="modal"
                        ><i class="material-icons">&#xE147;</i>
                        <span>Add New SubCategory</span></a
                      >
                    </div>
                  </div>
                </div>
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>
                        <span class="custom-checkbox">
                          <input type="checkbox" id="selectAll" />
                          <label for="selectAll"></label>
                        </span>
                      </th>
                      <th>SubCategory_ID</th>
                      <th>Name</th>
                      <th>Categorie_id</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      while($row = $results_SubCategory -> fetch_assoc()){
                        echo '                   <tr>
                        <td>
                          <span class="custom-checkbox">
                            <input
                              type="checkbox"
                              id="checkbox1"
                              name="options[]"
                              value="1"
                            />
                            <label for="checkbox1"></label>
                          </span>
                        </td>
                        <td>' . $row["subcategory_id"] . '</td>
                        <td>' . $row["subcategory_name"] . '</td>
                        <td>' . $row["category_id"] . '</td>
                        <td>
                          <a
                            href="updatesubcategory.php?id=' . $row["subcategory_id"] . '"
                            class="edit"
                            ><i
                              class="material-icons"
                              title="Edit"
                              >&#xE254;</i
                            ></a
                          >
                          <a
                            href="deletesubcategory.php?id=' . $row["subcategory_id"] . '"
                            class="delete"
                            ><i
                              class="material-icons"
                              title="Delete"
                              >&#xE872;</i
                            ></a
                          >
                        </td>
                      </tr>';
                      };
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- Edit Modal HTML -->
          <div id="addSubCategoryModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <form method="POST" action="addsubcategory.php">
                  <div class="modal-header">
                    <h4 class="modal-title">Add SubCategory</h4>
                    <button
                      type="button"
                      class="close"
                      data-dismiss="modal"
                      aria-hidden="true"
                    >
                      &times;
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="subcategory_name" class="form-control" required />
                    </div>
                    <div class="form-group">
                      <label>Categorie_id</label>
                      <input type="text" name="category_id" class="form-control" required />
                    </div>
                  </div>
                  <div class="modal-footer">
                    <input
                      type="button"
                      class="btn btn-default"
                      data-dismiss="modal"
                      value="Cancel"
                    />
                    <input type="submit" name="SUBMIT" class="btn btn-success" value="Add" />
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        
      </div>
      <div
      class="tab-pane fade"
      id="nav-statistique"
      role="tabpanel"
      aria-labelledby="nav-statistique-tab"
    >
    <figure class="statics_card">
                  <div class="static_info">
                    <h5>User Table</h5>
                    <p><?php echo $results_user->num_rows ?></p>
                  </div>
              </figure>
              <figure class="statics_card">
                  <div class="static_info">
                    <h5>Ressource Table</h5>
                    <p><?php echo $results_ressources->num_rows ?></p>
                  </div>
              </figure>
              <figure class="statics_card">
                  <div class="static_info">
                    <h5>Category Table</h5>
                    <p><?php echo $results_category->num_rows ?></p>
                  </div>
              </figure>
              <figure class="statics_card">
                  <div class="static_info">
                    <h5>SubCategory Table</h5>
                    <p><?php echo $results_SubCategory->num_rows ?></p>
                  </div>
    </figure>
          
          
    </div>
  </body>
</html>
