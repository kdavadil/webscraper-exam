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
  <h2>Results</h2>

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
