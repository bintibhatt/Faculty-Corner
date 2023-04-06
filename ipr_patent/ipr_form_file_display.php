<?php
include("db_connect.php");
    $id=$_REQUEST['id'];
    $sql = "SELECT * FROM ipr_patent_details WHERE id='".$id."'";
    $result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {	
            echo "<a href=\"./pdf/$row[app_form_file]\"><button>View</button></a>";
        }
    }
?>
