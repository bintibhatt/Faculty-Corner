<?php
	error_reporting(E_ALL & ~E_NOTICE);
	$id_entered = $_GET['id_entered'];

?>

<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src=
"//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js">
</script>
<script src=
"//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js">
</script>
	<title>Entries</title>
	<style>
       <?php include 'css/fp_output.css'; ?>
    </style>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
	<header class="header_container">
        <img class="mulogo_header" src="../images/MU_Logo.png" alt="MU logo">
        <img class="ictlogo_header" src="../images/ICT_logo_text.png" alt="MU logo">
    </header>
	<div class="container">
        <h1 class="title">Faculty Accreditation</h1>
    </div>
	<h2>Faculty Participation Details</h2>
	<div class="container1">
		<a href="faculty_participation.php"><button class="container1_btn">Add New Data</button></a>
		<form method="POST" action="">
                <select name="sort_by" class="dd_field">
                    <option value="none" selected disabled hidden>Sort by:</option>
                    <option value="sr_no">Sr. No.</option>
                    <option value="first_name">First name</option>
                    <option value="middle_name">Middle name</option>
					<option value="last_name">Last name</option>
					<option value="emp_id">Employee id</option>
                    <option value="organised_by">Organised by</option>
					<option value="organised_at">Organised at</option>
					<option value="city">City</option>
                    <option value="state">State</option>
					<option value="country">Country</option>
					<option value="start_date">Start Date</option>
					<option value="end_date">End Date</option>
					<option value="in_collab_by">In Collaboration by</option>
					<option value="no_of_days">No. of days</option>
					<option value="level">Level</option>
					<option value="mode">Mode</option>
				</select>
			<input type="text" name="rp_sort" placeholder="Search Here">&nbsp;&nbsp;
			<button class="btn" name="search" type="submit"><i class="fa fa-search"></i></button>
		</form>
	</div>
	<?php 
		include("db_connect.php");
		// if(isset($_POST['sort_by'] == null)){
			if(isset($_POST['sort_by'])){
				$sort_by = $_POST['sort_by'];
			}
			if(isset($_POST['rp_sort']) && $_POST['rp_sort'] == "" ){
				$sql = "SELECT * FROM faculty_participation_details WHERE status = '1'";
				$result = $conn->query($sql);
			}else if(isset($_POST['rp_sort']))
			{
				$rp_sort = $_POST['rp_sort'];
				$sql = "SELECT * FROM faculty_participation_details WHERE $sort_by ='".$rp_sort."' AND status = '1'";
				$result = $conn->query($sql);
				unset($_POST['rp_sort']); 
			}
			else{
				$sql = "SELECT * FROM faculty_participation_details WHERE status = '1'";
				$result = $conn->query($sql);
			}
		// }
	?>
	<!-- <a href="research_paper.php"><button style="width:150px; height:35px;">Add New Data</button></a><br/><br/> -->

	<div class="rp_div">
		
		<table id="rp_details_table">

		<tr bgcolor='#9CC9F6'>
			<th>Sr. No.</th>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Last Name</th>
			<th>Employee Id</th>
			<th>Event</th>
			<th>Title of Event</th>
			<th>Organised by</th>
			<th>Organised at</th>
			<th>City</th>
			<th>State</th>
			<th>Country</th>
			<th>Start date</th>
			<th>End date</th>
			<th>In Collaboration by</th>
			<th>No. of days</th>
			<th>Level</th>
			<th>Mode</th>
			<!-- <th>Abstract</th> -->
		</tr>
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
					echo "<td>".$row['sr_no']."</td>";
					echo "<td>".$row['first_name']."</td>";
					echo "<td>".$row['middle_name']."</td>";
					echo "<td>".$row['last_name']."</td>";
					echo "<td>".$row['emp_id']."</td>";
					echo "<td>".$row['event']."</td>";	
					echo "<td>".$row['title_of_event']."</td>";
					echo "<td>".$row['organised_by']."</td>";
					echo "<td>".$row['organised_at']."</td>";	
					echo "<td>".$row['city']."</td>";
					echo "<td>".$row['state']."</td>";
					echo "<td>".$row['country']."</td>";
					echo "<td>".$row['start_date']."</td>";
					echo "<td>".$row['end_date']."</td>";
					echo "<td>".$row['in_collab_by']."</td>";
					echo "<td>".$row['no_of_days']."</td>";	
					echo "<td>".$row['level']."</td>";
					echo "<td>".$row['mode']."</td>";
					echo "<td><a href=\"fp_view.php?id=$id\"><button>View</button></a></td>";
					echo "<td><a href=\"fp_edit.php?id=$row[id]\" onClick=\"return confirm('Record Updated Successfully</br><a href='fp_output.php'>View Updated Record</a>')\"><button>Edit</button></a></td>";
					echo "<td><a href=\"fp_delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\"><button>Delete</button></a></td>";
				}
				else{
					echo "<tr>";
					echo "<td>".$row['sr_no']."</td>";
					echo "<td>".$row['first_name']."</td>";
					echo "<td>".$row['middle_name']."</td>";
					echo "<td>".$row['last_name']."</td>";
					echo "<td>".$row['emp_id']."</td>";
					echo "<td>".$row['event']."</td>";	
					echo "<td>".$row['title_of_event']."</td>";
					echo "<td>".$row['organised_by']."</td>";
					echo "<td>".$row['organised_at']."</td>";	
					echo "<td>".$row['city']."</td>";
					echo "<td>".$row['state']."</td>";
					echo "<td>".$row['country']."</td>";
					echo "<td>".$row['start_date']."</td>";
					echo "<td>".$row['end_date']."</td>";
					echo "<td>".$row['in_collab_by']."</td>";
					echo "<td>".$row['no_of_days']."</td>";	
					echo "<td>".$row['level']."</td>";
					echo "<td>".$row['mode']."</td>";
					echo "<td><a href=\"fp_view.php?id=$id\"><button>View</button></a></td>";
					echo "<td><a href=\"fp_edit.php?id=$row[id]\" onClick=\"return confirm('Record Updated Successfully</br><a href='fp_output.php'>View Updated Record</a>')\"><button>Edit</button></a></td>";
				}
				
			}
		}

		
		?>
		</table>
	</div><br>
	<button onclick="exportTableToExcel('rp_details_table')" class="exporttoexcel">Export to Excel</button>

	<script>
		function exportTableToExcel(tableId) {
			$(document).ready(function () {
				$("#"+tableId).table2excel({
					filename: "Faculty Participation Details.xls"
				});
			});
		}
	</script>
</body>
</html>