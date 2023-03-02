<html>
<head>	
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

		.rp_div table, td{
			width:60px;
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
			width:100%;
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
			width:25%;
			border: 1px solid black;
  			border-collapse: collapse;
			text-align: center;
		}

        .rp_div button{
            margin-top:0.5%;
            width:50px;
			height:35px;
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
	<a href="research_paper.php"><button style="width:150px; height:35px;">Add New Data</button></a><br/><br/>

	<div class="rp_div">
		
		<table id="rp_details_table">

		<tr bgcolor='#9CC9F6'>
			<th>Publications</th>
			<th>Index</th>
			<th>Type</th>
			<th>Title of Article</th>
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
			<th>Role</th>
			<th>Current Status</th>
			<th>Link of Article</th>
			<th>File of Article</th>
			<th>Link of Journal</th>
			<th>Abstract</th>
		</tr>
		<?php 
		
		include("db_connect.php");
		$sql = "SELECT * FROM research_paper_details where status='1' ORDER BY id asc ";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		// output data of each row
			while($row = $result->fetch_assoc()) {
				$id = $row['id'];
				$title_article = $row['title_article'];
				echo "<tr>";
				echo "<td>".$row['publications']."</td>";
				echo "<td>".$row['index_rp']."</td>";
				echo "<td>".$row['type_rp']."</td>";	
				echo "<td>".$row['title_article']."</td>";
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
				echo "<td>".$row['no_of_author']."</td>";
				echo "<td>".$row['role']."</td>";
				echo "<td>".$row['current_status']."</td>";
				echo "<td>".$row['link_article']."</td>";
				echo "<td>".$row['file_article']."</td>";
				echo "<td>".$row['link_journal']."</td>";	
				echo "<td>".$row['abstract']."</td>";
				echo "<td><a href=\"rp_view.php?id=$id&title_article=$title_article\"><button>View</button></a></td>";
				echo "<td><a href=\"rp_edit.php?id=$row[id]\"><button>Edit</button></a></td>";
				echo "<td><a href=\"rp_delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\"><button>Delete</button></a></td>";	
			}
		}

		
		?>
		</table>
	</div>
	<?php 
		if(isset($_POST['print'])){
			header("Content-Type: application/xls");    
			header("Content-Disposition: attachment; filename=research_paper_details.xls");  
			header("Pragma: no-cache"); 
			header("Expires: 0");
		}
	?>
	<!-- <form action="" method="POST">
		<br><input style="width:150px; height:35px;" type="submit" name="print" value="Download Excel file">
	</form> -->
	<hr style="width:100%; height:5px; background-color:black;">
	<h3>Author Details</h3>
	<a href="rp_add_authors.php"><button style="width:250px; height:35px;">Add New Authors Data</button></a><br> <br>
	<?php 
		// include("db_connect.php");	
		if(isset($_POST['author_sort']) && $_POST['author_sort'] == "" ){
			$sql = "SELECT * FROM author_details";
			$result = $conn->query($sql);
		}else if(isset($_POST['author_sort']))
		{
			$author_sort = $_POST['author_sort'];
			// unset($_POST['author_sort']); 
			$sql = "SELECT * FROM author_details where research_paper_name='".$author_sort."'";
			$result = $conn->query($sql);
		}
	?>
	<form method="POST" action="">
		<input type="text" name="author_sort" placeholder="Type author name">
		<input style="margin-top:0.5%;"type="submit" name="search" class="submit_btn">
	</form>
	<div class="rp_author">
		<table id="rp_authors_table">

			<tr bgcolor='#9CC9F6'>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Research Paper Name</th>
			</tr>
			
			<?php
			// $sql = "SELECT * FROM author_details";
			// $result = $conn->query($sql);
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
			?>
		</table>
		</div>
	<!-- <script>
		function download(){
			
		}
	</script> -->

	<!-- <p> Sorting/Searching(year wise,author wise), pdf, excel</p> -->
</body>
</html>