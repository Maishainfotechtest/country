<?php 
include 'conn.php';
include "links.php";

//$select = "select * from country";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="/CSC/ajax.js"></script>

    <title>Document</title>
</head>
<body>

<div class="container my-5 text-center">
<h1>Country State City Drop Down</h1> 
<div class="input-group mb-3">


  <select class="custom-select" id="country">
  <option selected>Choose...country</option>
<?php 
$run = mysqli_query($conn , " select * from countries ");
while ($row = mysqli_fetch_assoc($run))
{
?>
  <option value="<?php echo $row['id'] ?>" class="text-uppercase font-weight-bold"><?php echo $row['name'];?></option>
<?php
}
?>
 </select> 


</div>
 
<!-- php for staTE DATA INPUT  -->
<div class="input-group mb-3">
  <select class="custom-select" id="state">
    <option selected>Choose...state</option>
 
     
 
</select>
  
</div>
<!-- city name -->

<div class="input-group mb-3">
  <select class="custom-select" id="city">
    <option selected>Choose...city</option>
    
     
   
  </select>
  <div class="input-group-append">
     
  </div>
</div>
</div>
 

</body>
</html>