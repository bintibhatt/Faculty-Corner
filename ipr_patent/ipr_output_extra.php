<?php
	error_reporting(E_ALL & ~E_NOTICE);
	$id_entered = $_GET['id_entered'];
	session_id($id_entered);
	session_start();

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
       <?php include 'css/ipr_output.css'; ?>
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
	<h2>IPR Patent Details</h2>
	<div class="container1">
		<a href="ipr_patent.php"><button class="container1_btn">Add New Data</button></a>
		<!-- <form method="POST" action="">
                <select id="" name="sort_by" class="dd_field">
                    <option value="none" selected disabled hidden>Sort by:</option>
                    <option value="faculty_id">Faculty Id</option>
                    <option value="first_name">First Name</option>
                    <option value="middle_name">Middle Name</option>
					<option value="last_name">Last Name</option>
					<option value="sr_no">Sr. No.</option>
                    <option value="patent_office">Patent Office</option>
					<option value="ipr_type">IPR Type</option>
					<option value="design_no">Design No.</option>
                    <option value="date">Date</option>
					<option value="team_1">Team-1</option>
					<option value="team_2">Team-2</option>
					<option value="team_3">Team-3</option>
					<option value="club">Club</option>
					<option value="date_of_issue">Date of Issue</option>
					<option value="date_of_renew">Date of Renew</option>
				</select>
			<input type="text" name="rp_sort" placeholder="Search Here">&nbsp;&nbsp;
			<button class="btn" name="search" type="submit"><i class="fa fa-search"></i></button>
		</form> -->
	</div>
	<?php 
		include("db_connect.php");
		// if(isset($_POST['sort_by'] == null)){
			if(isset($_POST['sort_by'])){
				$sort_by = $_POST['sort_by'];
			}
			if(isset($_POST['rp_sort']) && $_POST['rp_sort'] == "" ){
				$sql = "SELECT * FROM ipr_patent_details WHERE status = '1'";
				echo
				$result = $conn->query($sql);
			}else if(isset($_POST['rp_sort']))
			{
				$rp_sort = $_POST['rp_sort'];
				$sql = "SELECT * FROM ipr_patent_details WHERE $sort_by ='".$rp_sort."' AND status = '1'";
				$result = $conn->query($sql);
				unset($_POST['rp_sort']); 
			}
			else{
				$sql = "SELECT * FROM ipr_patent_details WHERE status = '1'";
				$result = $conn->query($sql);
			}
		// }
	?>
	<!-- <a href="research_paper.php"><button style="width:150px; height:35px;">Add New Data</button></a><br/><br/> -->

	<div class="rp_div">
		
		<table id="rp_details_table">

		<thead>
            <tr bgcolor='#9CC9F6'>
			<th>Faculty Id</th>
			<th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
			<th>Sr. No.</th>
			<th>Patent Office</th>
			<th>IPR Type</th>
			<th>Design No.</th>
			<th>Date</th>
			<th>Team-1</th>
			<th>Team-2</th>
			<th>Team-3</th>
			<th>Club</th>
			<th>Date of Issue</th>
			<th>Date of Renew</th>
		</tr>
        </thead>
		
		</table>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js" charset="utf8" type="text/javascript"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#rp_details_table').dataTable({
            "processing": true,
            "ajax": "ipr_datatable_fetch.php",
            "columns": [
                {data: 'faculty_id'},
                {data: 'first_name'},
                {data: 'middle_name'},
                {data: 'last_name'},
                {data: 'sr_no'},
                {data: 'patent_office'},
                {data: 'ipr_type'},
                {data: 'design_no'},
                {data: 'date'},
                {data: 'team_1'},
                {data: 'team_2'},
                {data: 'team_3'},
                {data: 'club'},
                {data: 'date_of_issue'},
                {data: 'date_of_renew'},
            ],
            dom: 'Bfrtip',
            buttons: [
                'copy', 'excel', 'print'
            ]
        });
    });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>

		</div>
</body>
</html>