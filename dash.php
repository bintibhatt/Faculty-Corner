<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now user dashboard page.</p>
        <p><a href="logout.php">Logout</a></p>
    </div>
    <form method="post" action="">
    <button type="submit"><a href="./research_paper.php">Enter about research paper </button>
    <button type="submit"><a href="./training.php">Enter about Training</button>
    <button type="submit"><a href="./certification.php">Enter about Certification</button>
</form>
</body>
</html>