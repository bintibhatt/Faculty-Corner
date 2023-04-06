<?php 
		
		// include("db_connect.php");
		// $sql = "SELECT * FROM research_paper_details where status='1' ORDER BY id asc ";
		// $result = $conn->query($sql);

		if ($result->num_rows > 0) {
		// output data of each row
			while($row = $result->fetch_assoc()) {
				$id = $row['id'];
				$title_article = $row['title_article'];
				if($id_entered == 1234 )
				{
					echo "<tr>";
					echo "<td>".$row['faculty_id']."</td>";
					echo "<td>".$row['first_name']." ".$row['middle_name']." ".$row['last_name']."</td>";
					echo "<td>".$row['sr_no']."</td>";
					echo "<td>".$row['patent_office']."</td>";
					echo "<td>".$row['ipr_type']."</td>";
					echo "<td>".$row['design_no']."</td>";	
					echo "<td>".$row['date']."</td>";
					echo "<td>".$row['team_1']."</td>";
					echo "<td>".$row['team_2']."</td>";	
					echo "<td>".$row['team_3']."</td>";
					echo "<td>".$row['club']."</td>";
					echo "<td>".$row['date_of_issue']."</td>";
					echo "<td>".$row['date_of_renew']."</td>";
					echo "<td><a href=\"ipr_view.php?id=$id&title_article=$title_article\"><button>View</button></a></td>";
					echo "<td><a href=\"ipr_edit.php?id=$row[id]\" onClick=\"return confirm('Record Updated Successfully</br><a href='rp_output.php'>View Updated Record</a>')\"><button>Edit</button></a></td>";
					echo "<td><a href=\"ipr_delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\"><button>Delete</button></a></td>";
				}
				else{
					echo "<tr>";
					echo "<td>".$row['faculty_id']."</td>";
					echo "<td>".$row['first_name']." ".$row['middle_name']." ".$row['last_name']."</td>";
					echo "<td>".$row['sr_no']."</td>";
					echo "<td>".$row['patent_office']."</td>";
					echo "<td>".$row['ipr_type']."</td>";
					echo "<td>".$row['design_no']."</td>";	
					echo "<td>".$row['date']."</td>";
					echo "<td>".$row['team_1']."</td>";
					echo "<td>".$row['team_2']."</td>";	
					echo "<td>".$row['team_3']."</td>";
					echo "<td>".$row['club']."</td>";
					echo "<td>".$row['date_of_issue']."</td>";
					echo "<td>".$row['date_of_renew']."</td>";
					echo "<td><a href=\"ipr_view.php?id=$id&title_article=$title_article\"><button>View</button></a></td>";
				}
				
			}
		}

		
		?>