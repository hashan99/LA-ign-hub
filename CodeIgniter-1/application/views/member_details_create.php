<!DOCTYPE html>
<html lang="en">
<head>
  <title>member_details_create</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="p-3 mb-2 text-dark">

<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand" href="<?php echo base_url('index.php')?>">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      
      <li class="navbar-brand">
        <a class="nav-brand text-dark" href="<?php echo base_url('index.php/member_details/savedata')?>">Create</a>
      </li>

      <li class="navbar-brand">
        <a class="nav-brand text-dark" href="<?php echo base_url('index.php/member_details/displaydata')?>">Data View</a>  
      </li>

      <li class="navbar-brand">
        <a class="nav-brand text-dark" href="<?php echo base_url('index.php/member_details/displaydelete')?>">Delete</a>
      </li>

      <li class="navbar-brand">
        <a class="nav-brand text-dark" href="<?php echo base_url('index.php/member_details/displayupdate')?>">Update</a>
      </li>

      <li class="navbar-brand">
        <a class="nav-brand text-dark" href="<?php echo base_url('index.php/pdf_controller/generate_pdf_report')?>">PDF Report</a>
      </li>
    </ul>
      
      
  </div>
</nav>

<div class="container">
  <h1 align="center">Create a New Member</h1>

  <br>
  <br>
  
  <form class="form-horizontal" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="member_id">Member_ID:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="member_id" placeholder="Enter Member ID" name="member_id">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="first_name">First_Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="first_name" placeholder="Enter First Name" name="first_name">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="last_name">Last_Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name" name="last_name">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="ign">IGN:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="ign" placeholder="Enter IGN" name="ign">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="contact_number">Contact_Number:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="contact_number" placeholder="Enter Contact Number" name="contact_number">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="primary_game">Primary_Game:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="primary_game" placeholder="Enter Primary Game" name="primary_game">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-default" name="submit" value="Submit">
      </div>
    </div>

  </form>
</div>
</div>
</body>
</html>
