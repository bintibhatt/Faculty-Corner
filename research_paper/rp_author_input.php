<?php
    include("db_connect.php");
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $research_paper_name = $_POST['research_paper_name'];
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO author_details (first_name, last_name, email , research_paper_name, status) VALUES ('$first_name', '$last_name', '$email', '$research_paper_name', 1)";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo "<br>";
    echo "<a href=\"rp_output.php\">View Data</a>";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>

