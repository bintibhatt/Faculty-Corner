<?php

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
        body{
            font-family: 'Inter', sans-serif;
        }
        .mulogo_header {
            width: 13%;
            align-content: left;
        }

        .ictlogo_header {
            width: 15%;
            float: right;
            padding-top: 0.5%;
            padding-right: 1%;
        }

        .rp_div{
			width:95%;
			margin-left:2.5%;
            background-color: #c9e1f4;
			padding:30px;
            border: 1px solid;
            box-sizing: border-box;
            border-radius: 5px;
            font-size: 20px;
			overflow-x: auto;
        }

		.rp_div table{
			border: 1px solid black;
  			border-collapse: collapse;
			background-color:white;
			text-align: center;
		}

		.rp_div td{
			/* width:60px; */
			border: 1px solid black;
  			border-collapse: collapse;
			background-color:white;
			text-align: center;
		}

		.rp_div th{
			border: 1px solid black;
  			border-collapse: collapse;
			text-align: center;
		}
		
		input{
			width:250px;
			background-color: #c9e1f4;
			border-color: #c9e1f4;
			border-radius:5px;
		}

		.container1{
            display:flex;
        }

        .container1 form {
			display:flex;
            margin-left:64%;   
        }

        .container1_btn {
			margin-left:35%;  
            background-color:DodgerBlue;
            border-color:DodgerBlue;
            width:100%;
            height:30px;   
            color:white;
            text-align: center;
            text-decoration: none;
            font-size: 15px;
            border-radius:5px; 
        }

		.container1 .btn{
			background-color:DodgerBlue;
            border-color:DodgerBlue;
            width:15%;
            height:30px;   
            color:white;
            text-align: center;
            text-decoration: none;
            font-size: 15px;
            border-radius:5px; 
		}

		.dd_field {
			width: 100px;
			margin-right:1%;
			border-radius:5px; 
		}

		.container2{
            display:flex;
        }

        .container2 form {
			display:flex;
            margin-left:60%;   
        }

        .container2_btn {
			margin-left:24%;  
            background-color:DodgerBlue;
            border-color:DodgerBlue;
			width:100%;
            height:30px;   
            color:white;
            text-align: center;
            text-decoration: none;
            font-size: 15px;
            border-radius:5px; 
        }

		.container2 .btn{
			background-color:DodgerBlue;
            border-color:DodgerBlue;
            width:20%;
            height:30px;   
            color:white;
            text-align: center;
            text-decoration: none;
            font-size: 15px;
            border-radius:5px; 
		}

		.exporttoexcel{
			margin-left:47%;
			background-color:DodgerBlue;
            border-color:DodgerBlue;
            height:30px;   
            color:white;
            text-align: center;
            text-decoration: none;
            font-size: 15px;
            border-radius:5px; 
		}

		.rp_author{
			width:95%;
			margin-left:2.5%;
            background-color: #c9e1f4;
			padding:30px;
            border: 1px solid;
            box-sizing: border-box;
            border-radius: 5px;
            font-size: 20px;
        }

		.rp_author table{
			/* width:100%; */
			border: 1px solid black;
  			border-collapse: collapse;
			background-color:white;
			text-align: center;
		}

		.rp_author td{
			border: 1px solid black;
  			border-collapse: collapse;
			background-color:white;
			text-align: center;
		}

		.rp_author th{
			width:15%;
			border: 1px solid black;
  			border-collapse: collapse;
			text-align: center;
		}

        .rp_div button{
            margin-top:0.5%;
            width:50px;
			height:35px;
        }

		.hideContent {
			overflow: hidden;
			line-height: 1em;
			height: 2em;
		}

		.showContent {
			line-height: 1em;
			height: auto;
		}
		.showContent{
			height: auto;
		}
		.show-more {
			padding: 10px 0;
			text-align: center;
		}
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
	<h3>Research Paper Details</h3>
	<div class="container1">
		<a href="research_paper.php"><button class="container1_btn">Add New Data</button></a>
		<form method="POST" action="">
                <select id="publications" name="sort_by" class="dd_field">
                    <option value="none" selected disabled hidden>Sort by:</option>
                    <option value="title_article">Title of Article</option>
                    <option value="publications">Publications</option>
                    <option value="index_rp">Index</option>
					<option value="type_rp">Type</option>
					<option value="journal_magazine_title">Journal/Magazine Title</option>
                    <option value="impact_factor">Impact Factor</option>
					<option value="vol_no">Volume No.</option>
					<option value="doi">DOI</option>
                    <option value="q_factor">Q-factor</option>
					<option value="publication_month">Publication Month</option>
					<option value="publication_year">Publication Year</option>
					<option value="publication_date">Publication Date</option>
					<option value="page_no">Page No.</option>
					<option value="Author">Author</option>
					<option value="co_author">All Co-author name</option>
                    <option value="department">Department</option>
					<option value="university">University</option>
					<option value="country">Country</option>
					<option value="role">Role</option>
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
				$sql = "SELECT * FROM research_paper_details WHERE status = '1'";
				$result = $conn->query($sql);
			}else if(isset($_POST['rp_sort']))
			{
				$rp_sort = $_POST['rp_sort'];
				$sql = "SELECT * FROM research_paper_details WHERE $sort_by ='".$rp_sort."' AND status = '1'";
				$result = $conn->query($sql);
				unset($_POST['rp_sort']); 
			}
			else{
				$sql = "SELECT * FROM research_paper_details WHERE status = '1'";
				$result = $conn->query($sql);
			}
		// }
	?>
	<!-- <a href="research_paper.php"><button style="width:150px; height:35px;">Add New Data</button></a><br/><br/> -->

	<div class="rp_div">
		
		<table id="rp_details_table">

		<tr bgcolor='#9CC9F6'>
			<th>Title of Article</th>
			<th>Publications</th>
			<th>Index</th>
			<th>Type</th>
			<th>Journal/Magazine Title</th>
			<th>Impact Factor</th>
			<th>Volume No.</th>
			<th>DOI</th>
			<th>Q factor</th>
			<th>Publication month</th>
			<th>Publication year</th>
			<th>Publication date</th>
			<th>Page No.</th>
			<th>Author</th>
			<th>Co-author</th>
			<th>No. of author</th>
			<th>Department</th>
			<th>University</th>
			<th>Role</th>
			<th>Current Status</th>
			<th>Link of Article</th>
			<th>File of Article</th>
			<th>Link of Journal</th>
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
					echo "<td>".$row['title_article']."</td>";
					echo "<td>".$row['publications']."</td>";
					echo "<td>".$row['index_rp']."</td>";
					echo "<td>".$row['type_rp']."</td>";
					echo "<td>".$row['journal_magazine_title']."</td>";
					echo "<td>".$row['impact_factor']."</td>";	
					echo "<td>".$row['vol_no']."</td>";
					echo "<td>".$row['doi']."</td>";
					echo "<td>".$row['q_factor']."</td>";	
					echo "<td>".$row['publication_month']."</td>";
					echo "<td>".$row['publication_year']."</td>";
					echo "<td>".$row['publication_date']."</td>";
					echo "<td>".$row['page_no']."</td>";
					echo "<td>".$row['author']."</td>";
					echo "<td>".$row['co_author']."</td>";	
					echo "<td>".$row['department']."</td>";
					echo "<td>".$row['university']."</td>";	
					echo "<td>".$row['no_of_author']."</td>";
					echo "<td>".$row['role']."</td>";
					echo "<td>".$row['current_status']."</td>";
					echo "<td>"."<a href=".$row['link_article'].">Link of article</a>"."</td>";
					echo "<td>".$row['file_article']."</td>";
					echo "<td>"."<a href=".$row['link_journal'].">Link of Journal</a>"."</td>";	
					// echo "<td>".$row['abstract']."</td>";
					echo "<td><a href=\"rp_view.php?id=$id&title_article=$title_article\"><button>View</button></a></td>";
					echo "<td><a href=\"rp_edit.php?id=$row[id]\" onClick=\"return confirm('Record Updated Successfully</br><a href='rp_output.php'>View Updated Record</a>')\"><button>Edit</button></a></td>";
					echo "<td><a href=\"rp_delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\"><button>Delete</button></a></td>";
				}
				else{
					echo "<tr>";
					echo "<td>".$row['title_article']."</td>";
					echo "<td>".$row['publications']."</td>";
					echo "<td>".$row['index_rp']."</td>";
					echo "<td>".$row['type_rp']."</td>";
					echo "<td>".$row['journal_magazine_title']."</td>";
					echo "<td>".$row['impact_factor']."</td>";	
					echo "<td>".$row['vol_no']."</td>";
					echo "<td>".$row['doi']."</td>";
					echo "<td>".$row['q_factor']."</td>";	
					echo "<td>".$row['publication_month']."</td>";
					echo "<td>".$row['publication_year']."</td>";
					echo "<td>".$row['publication_date']."</td>";
					echo "<td>".$row['page_no']."</td>";
					echo "<td>".$row['author']."</td>";
					echo "<td>".$row['co_author']."</td>";	
					echo "<td>".$row['department']."</td>";
					echo "<td>".$row['university']."</td>";	
					echo "<td>".$row['no_of_author']."</td>";
					echo "<td>".$row['role']."</td>";
					echo "<td>".$row['current_status']."</td>";
					echo "<td>"."<a href=".$row['link_article'].">Link of article</a>"."</td>";
					echo "<td>".$row['file_article']."</td>";
					echo "<td>"."<a href=".$row['link_journal'].">Link of Journal</a>"."</td>";	
					// echo "<td>".$row['abstract']."</td>";
					echo "<td><a href=\"rp_view.php?id=$id&title_article=$title_article\"><button>View</button></a></td>";
					echo "<td><a href=\"rp_edit.php?id=$row[id]\" onClick=\"return confirm('Record Updated Successfully</br><a href='rp_output.php'>View Updated Record</a>')\"><button>Edit</button></a></td>";
				}
				
			}
		}

		
		?>
		</table>
	</div><br>
	<button onclick="exportTableToExcel('rp_details_table')" class="exporttoexcel">Export to Excel</button>

	<hr style="width:100%; height:5px; background-color:black;">
	<h3>Author Details</h3>
	<div class="container2">
		<a href="rp_add_authors.php"><button class="container2_btn">Add New Author's Data</button></a>
		<form method="POST" action="">
			<select id="publications" name="author_sort_by" class="dd_field">
                    <option value="none" selected disabled hidden>Sort by:</option>
                    <option value="first_name">First Name</option>
                    <option value="last_name">Last Name</option>
                    <option value="email">Email</option>
                    <option value="department">Department</option>
					<option value="university">University</option>
					<option value="country">Country</option>
					<option value="research_paper_name">Research Paper Name</option>
				</select>
			<input type="text" name="author_sort" placeholder="Search Here">&nbsp;&nbsp;
			<button class="btn" name="search" type="submit"><i class="fa fa-search"></i></button>
		</form>
	</div>
	<?php 
		include("db_connect.php");	
		if(isset($_POST['author_sort_by'])){
			$author_sort_by = $_POST['author_sort_by'];
		}
		if(isset($_POST['author_sort']) && $_POST['author_sort'] == "" ){
			$sql = "SELECT * FROM author_details";
			$result = $conn->query($sql);
		}else if(isset($_POST['author_sort']))
		{
			$author_sort = $_POST['author_sort'];
			// unset($_POST['author_sort']); 
			$sql = "SELECT * FROM author_details where $author_sort_by ='".$author_sort."'";
			$result = $conn->query($sql);
		}
		else{
			$sql = "SELECT * FROM author_details";
			$result = $conn->query($sql);
		}
	?>
	
	<div class="rp_author">
		<table id="rp_authors_table">

			<tr bgcolor='#9CC9F6'>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Research Paper Name</th>
				<th>Department</th>
				<th>University</th>
				<th>Country</th>
			</tr>
			
			<?php
				if ($result->num_rows > 0) {
				// output data of each row
					while($row = $result->fetch_assoc()) {		
						echo "<tr>";
						echo "<td>".$row['first_name']."</td>";
						echo "<td>".$row['last_name']."</td>";
						echo "<td>".$row['email']."</td>";	
						echo "<td>".$row['research_paper_name']."</td>";	
						echo "<td>".$row['department']."</td>";
						echo "<td>".$row['university']."</td>";	
						echo "<td>".$row['country']."</td>";
						// echo "<td><a href=\"rp_view.php?id=$row[id]\"><button>View</button></a></td>";
						// echo "<td><a href=\"rp_edit.php?id=$row[id]\"><button>Edit</button></a></td>";
						// echo "<td><a href=\"rp_delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\"><button>Delete</button></a></td>";	
					}
				}
			?>
		</table>
		</div>

	<script>
		function exportTableToExcel(tableId) {
			$(document).ready(function () {
				$("#"+tableId).table2excel({
					filename: "Research paper details.xls"
				});
			});
		}
	</script>
</body>
</html>