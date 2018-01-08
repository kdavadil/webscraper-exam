<?php 
include "crud.php"; 
?>

<!DOCTYPE html>
<html>

<?php 
require("partials/_head.php");
?>
<body>

<?php 
require("partials/_navbar.php");
?>

<div class="hero-image">
<div class="hero-text">
  <h2>Sample CRUD</h2>
  <div class="container" id="container1">
    <div class="row" id="row1">
      <div class="col-md-2"></div>
      <div class="col-md-8">
<?php 
if (isset($_GET["update"])) {
  $id = $_GET["id"] ?? null;
  $where = array("id"=>$id);
  $row = $obj->select_record("person",$where);
  ?>

  <form method="POST" action="crud.php">
  <div class="form-group">
  <div class="panel panel-primary">
    <div class="panel-heading">Enter Details</div>
    <div class="panel-body">

  <div class="form-group">
    <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
  </div>

    <div class="form-group">
    <label for="lastname">Last Name</label>
    <input type="text" class="form-control" name="lastname" aria-describedby="lastname" placeholder="Enter lastname" value="<?php echo $row["lastname"] ?>">
  </div>
  <div class="form-group">
    <label for="firstname">First Name</label>
    <input type="text" class="form-control" name="firstname" placeholder="Enter firstname" value="<?php echo $row["firstname"] ?>">
  </div>
  <div class="form-group">
      <label for="sel1">Gender</label>
      <select class="form-control" name="gender" value="<?php echo $row["gender"] ?>">
        <option>Male</option>
        <option>Female</option>
      </select>
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="edit" value="Update">
  </div>
     </div> <!-- Panel Body  -->
    </div><!-- Panel -->
   </div><!-- Formgroup -->
  </form> <!-- Form -->

  <?php
} 

else {
  ?> 

  <form method="POST" action="crud.php">
  <div class="form-group">
  <div class="panel panel-primary">
    <div class="panel-heading">Enter Details</div>
    <div class="panel-body">
      
    <div class="form-group">
    <label for="lastname">Last Name</label>
    <input type="text" class="form-control" name="lastname" aria-describedby="lastname" placeholder="Enter lastname">
  </div>
  <div class="form-group">
    <label for="firstname">First Name</label>
    <input type="text" class="form-control" name="firstname" placeholder="Enter firstname">
  </div>
  <div class="form-group">
      <label for="sel1">Gender</label>
      <select class="form-control" name="gender">
        <option>Male</option>
        <option>Female</option>
      </select>
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="submit" value="Store">
  </div>
     </div> <!-- Panel Body  -->
    </div><!-- Panel -->
   </div><!-- Formgroup -->
  </form> <!-- Form -->

  <?php
}
  
 ?>

</div> <!-- col-md-8 -->
  <div class="col-md-2"></div>
</div> <!-- end of row1 -->
</div> <!-- end of container1 --> 


<div class="container" id="container2">
  <div class="row">
    <div class="col-md-2"></div>
   <div class="col-md-8">
    <table class="table table-bordered">
      <tr>
        <th>#</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Gender</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>

      <?php 

      $myrow = $obj->fetch_record("person");
      foreach ($myrow as $row) {
        // breaking point
        ?>

      <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["lastname"]; ?></td>
        <td><?php echo $row["firstname"]; ?></td>
        <td><?php echo $row["gender"]; ?></td>
        <td><a href="index.php?update=1&id=<?php echo $row["id"]; ?>" class="btn btn-info">Edit</a></td>
        <td><a href="#" class="btn btn-danger">Delete</a></td>
      </tr>

      <?php 
      }
     ?>   
    </table>
  </div> <!--col-md-8 -->
  <div class="col-md-2"></div>
  </div>
</div> <!-- end of container2 -->


 </div> <!-- Hero Text -->
</div> <!-- Hero Image -->


</body>

<?php 
require("pages/login.php");
require("pages/register.php");
require("partials/_footer.php");
require("scripts/javascript.php");
 ?>

</html>
