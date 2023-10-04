<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Donation Process Details</title>
    <style>
        /* Custom CSS styles for the card */
        .card {
            margin: 20px;
        }
    </style>
</head>

<body>

<?php
session_start();

if(isset($_SESSION["user"])){
  $d = $_SESSION["user"];

  $myObject = new ViewPortral();
$myObject->viewPost();
  ?>
<h1><?php echo $d["username"]; ?></h1>

<?php 
}
else{
    echo "wrong address";
}

?>

<div class="col-6">
<button type="button" onclick="logout();" class=" col-12 btn btn-dark d-grid">logout</button>
</div>

    
    

    <script src="js/script.js"></script>
</body>

</html>