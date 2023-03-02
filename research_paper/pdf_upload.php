<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "html_forms";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_POST['submit'])) {
 
        $name = $_POST['name'];
 
        if (isset($_FILES['pdf_file']['name']))
        {
          $file_name = $_FILES['pdf_file']['name'];
          $file_tmp = $_FILES['pdf_file']['tmp_name'];
 
          move_uploaded_file($file_tmp,"./pdf/".$file_name);
 
          $insertquery =
          "INSERT INTO simple_form (username,filename) VALUES('$name','$file_name')";
          $iquery = mysqli_query($con, $insertquery);
        }
        else
        {
           ?>
            <div class=
            "alert alert-danger alert-dismissible
            fade show text-center">
              <a class="close" data-dismiss="alert"
                 aria-label="close">×</a>
              <strong>Failed!</strong>
                  File must be uploaded in PDF format!
            </div>
          <?php
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="./images/ICT-log.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Upload</title>
</head>

<body>
    
<form method="post" enctype="multipart/form-data">
    <div class="form-input py-2">
        <div class="form-group">
          <input type="text" class="form-control" name="name"
                 placeholder="Enter your name" required>
        </div>                                 
        <div class="form-group">
          <input type="file" name="pdf_file"
                 class="form-control" accept=".pdf"
                 title="Upload PDF"/>
        </div>
        <div class="form-group">
          <input type="submit" class="btnRegister"
                 name="submit" value="Submit">
        </div>
   </div>
</form>
</body>

</html>
