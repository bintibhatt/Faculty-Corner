<?php
session_start();
if(isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $conn = mysqli_connect("localhost", "root", "", "faculty_acc");
  mysqli_close($conn);
}
?>
<h1>Enter about Certification</h1>
<form method="post" action="">
    <label>Name</label>
    <input type="text" required>
    <br>
    <label>Summary</label>
    <input type="text" required>
    <br>
    <label>Participation Year</label>
    <input type="number" required>
    <br>
    <label>Organised by</label>
    <input type="text" required>
    <br>
    <label>Location</label>
    <input type="text" required>
    <br>
    <label>National/International</label>
    <input type="text" required>
    <br>
    <label>Enter file</label>
    <input type="" required>
    <br>
</form>