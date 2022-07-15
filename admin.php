<?php include('adminheader.php'); ?>
<?php  include("dbconnect.php"); ?>

<center>
<h3 style="padding: 10px;">Event Registration:</h3>
<div class="jumbotron col-6" style=" font-weight: bold;">
<form  action='submit.php' method='post'>
  <div class="form-group row">
    <label for="name" class="col-3">Name:</label>
    <input type="text" class="form-control col-8" id="name" name="name" placeholder="Enter name" required>
 
  </div>
  <div class="form-group row">
    <label for="exampleInputEmail1" class="col-3">Email address:</label>
    <input type="email" class="form-control col-8" id="email" name="email" placeholder="Enter email" required>
 
  </div>
  <div class="form-group row">
    <label for="title" class="col-3">Event:</label>
    <input type="text" class="form-control col-8" id="title" name="title" placeholder="Enter event" required>
   
  </div>
<div class="form-group row">
    <label for="Year" class="col-3">Year:</label>
    <input type="int" class="form-control col-8" id="Year" name="Year" placeholder="Enter Year" required>
   
  </div>
  <div class="form-group row">
    <label for="title" class="col-3">Gender:</label>
     <label class="col-4">male<input class="form-check-input col-4" type="radio" name="gender" value="male" required></label>
     <label class="col-4">female<input class="form-check-input col-4" type="radio" name="gender" value="female" required></label>
  </div>

    <div class="form-group row">
    <label for="title" class="col-3">From Date:</label>
    <input type="date" class="form-control col-8" id="fromdate" name='fromdate'  required>
   
  </div>
  <div class="form-group row">
    <label for="title" class="col-3">To Date:</label>
    <input type="date" class="form-control col-8" id="todate" name='todate'  required>
   

  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input" required>
      <a href data-toggle="modal" data-target=".bd-example-modal-lg"> Agree to terms and Condtions </div>
      <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
   

    </div>
  </div>
</a>
    </label>
  </div>
 


  <button class="btn btn-primary" type="submit"  value='submit' >Submit</button>
  <button class="btn btn-warning" type="reset"  value='reset' >Reset</button>
</form>
</div>
</div>
</center>
<?php include('footer.php'); ?>