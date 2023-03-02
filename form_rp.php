<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "html_forms";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO contactform_entries (id, fname, lname, email) VALUES ('0', '$fname', '$lname', '$email')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    // close connection
    mysqli_close($con);

?>

<html>
 <head>
 </head>
 <body>
   <div class="form">
    <form method="POST" action="form_rp.php">
      <p>
      <label for="fname">First Name </label>
      <input type="text" name="fname" id="fname">
      </p>
      <p>
      <label for="lname">Last Name </label>
      <input type="text" name="lname" id="lname">
      </p>
      <p>
      <label for="email">Email</label>
      <input type="text" name="email" id="email">
      </p>
      <p>
      <input type="submit" name="submit" id="submit" value="Submit">
      </p>
    </form>
 </body>
</html>