<!DOCTYPE html>
<html lang="en">
<head>
  <title>member_details_display</title>

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
</div>

<div class="container">
  <h1 align="center">Display Member Details</h1>

  <br>
  <br>
             
  <table class="table table-bordered" width="100%">
    
      <tr class="info">
        <th>Member_ID</th>
        <th>First_Name</th>
        <th>Last_Name</th>
        <th>IGN</th>
        <th>Contact_Number</th>
        <th>Primary_Game</th>
      </tr>
    
    
      
    <?php
      foreach ($data as $row)
      {
        echo "<tr>";
        echo "<td>".$row->Member_ID."</td>";
        echo "<td>".$row->First_Name."</td>";
        echo "<td>".$row->Last_Name."</td>";
        echo "<td>".$row->IGN."</td>";
        echo "<td>".$row->Contact_Number."</td>";
        echo "<td>".$row->Primary_Game."</td>";
        // echo "<td><a href='deletedata?Member_ID=".$row-> Member_ID."'>Delete</a></td>";
        // echo "<td><a href='updatedata?Member_ID=".$row-> Member_ID."'>Update</a></td>";
        echo "</tr>";
      }

    ?>
    
  </table>
</div>

</body>
</html>
