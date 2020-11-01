<!DOCTYPE html>
<html lang="en">
<head>
  <title>member_details_update</title>
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
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li> -->
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

<?php

  foreach($data as $row)
  {

?>


<div class="container">
  <h1 align="center">Update a Member</h1>
  
  <form method="post">
  
  <br>
  <br>
             
  <table class="table table-bordered" width="100%">
    
     <tbody>
           
        <tr class="success">
          <td>First_Name</td>
          <td><input type="text" name="first_name" value="<?php echo $row->First_Name; ?>"></td>
        </tr>

        <tr class="danger">
          <td>Last_Name</td>
          <td><input type="text" name="last_name" value="<?php echo $row->Last_Name; ?>"></td>
        </tr>

        <tr class="info">
          <td>IGN</td>
          <td><input type="text" name="ign" value="<?php echo $row->IGN; ?>"></td>
        </tr>

        <tr class="success">
          <td>Contact_Number</td>
          <td><input type="text" name="contact_number" value="<?php echo $row->Contact_Number; ?>"></td>
        </tr>

        <tr class="danger">
          <td>Primary_Game</td>
          <td><input type="text" name="primary_game" value="<?php echo $row->Primary_Game; ?>"></td>
        </tr>

        <tr class="info">
          <td colspan="2" style="text-align:center;"><input type="submit" name="update" value="Update"></td>
        </tr>

      </tbody>
    
    </table>

    </form>
</div>

<?php } ?>

</body>
</div>
</html>
