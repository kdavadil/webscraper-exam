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
<form method="POST" action="pages/crud.php">
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
</div> <!-- col-md-8 -->
  <div class="col-md-2"></div>
</div> <!-- end of row1 -->
</div> <!-- end of container1 --> 


<div class="container">
  <div class="row">
    <div class="col-md-2"></div>
   <div class="col-md-8">
    <table class="table table-bordered">
      <tr>
        <th>#</th>
        <th>Email</th>
        <th>Name</th>
        <th>Gender</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>

      <tr>
        <th>1</th>
        <th>Sample Email</th>
        <th>Sample</th>
        <th>Male</th>
        <th><a href="#" class="btn btn-info">Edit</a></th>
        <th><a href="#" class="btn btn-danger">Delete</a></th>
      </tr>
    </table>
  </div> <!--col-md-8 -->
  <div class="col-md-2"></div>
  </div>
</div> 


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
