<?php
    include("db_connect.php");
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $author_sort = $_POST['author_sort'];
    }

    // using sql to create a data entry query
    $sql = "SELECT * FROM author_details where first_name='".$author_sort."'";
    $result = $conn->query($sql);

				if ($result->num_rows > 0) {
				// output data of each row
					while($row = $result->fetch_assoc()) {		
						echo "<tr>";
						echo "<td>".$row['first_name']."</td>";
						echo "<td>".$row['last_name']."</td>";
						echo "<td>".$row['email']."</td>";	
						echo "<td>".$row['research_paper_name']."</td>";
						// echo "<td><a href=\"rp_view.php?id=$row[id]\"><button>View</button></a></td>";
						// echo "<td><a href=\"rp_edit.php?id=$row[id]\"><button>Edit</button></a></td>";
						// echo "<td><a href=\"rp_delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\"><button>Delete</button></a></td>";	
					}
				}

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo "<br>";
    echo "<a href=\"rp_output.php\">View Data</a>";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>

