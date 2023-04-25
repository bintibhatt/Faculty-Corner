<?php
session_start();
?>

<html>
<head>	
	<title>IPR Patent</title>
	<style>
        body{
            font-family: 'Inter', sans-serif;
        }
        .header_container{
            width: 100%;
            display:flex;
        }

        .mulogo_header {
            width: 13%;
            align-content: left;
        }

        .title{
            margin-left: 24.3%;
        }

        .ictlogo_header {
            width: 15%;
            float: right;
            padding-top: 0.5%;
            padding-right: 1%;
            margin-left: 24.3%;
        }


        .container button {
            background-color:#21c8de;
            border-color:#21c8de;
            margin-top:1%;
            margin-left:85%;
            margin-bottom:1%;
            width:10%;
            height:35px;
            border-radius:10px; 
        }

        .rp_div{
            background-color: #c9e9f4;
            align-items: flex-start;
            padding: 50px;
            position: center;
            width: 90%;
            border: 1px solid;
            box-sizing: border-box;
            border-radius: 10px;
            margin-left: 5%;
            font-size: 20px;
            text-align:justify; 
            line-height: 1.5;
        }

        .download_btn button{
            background-color:#21c8de;
            text-align: center;
            text-decoration: none;
            margin-left:2%;
            font-size: 15px;
            border-radius:10%;
            border-color:#21c8de;
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
        <h1 class="title">Faculty Corner</h1>
        <img class="ictlogo_header" src="../images/ICT_logo_text.png" alt="MU logo">
    </header>
    <div class="container">
        <a href="ipr_output.php"><button class="back_btn">Back</button></a>
    </div>

    <div class="rp_div">
	<?php 

    // session_start();

    include("../db_connect.php");
    $id = $_POST['id'];
    $sql = "SELECT * FROM ipr_patent_details WHERE id='".$id."'";
    /*WHERE id=".$_SESSION['id'];
    --echo $sql;
    --exit(0);*/
    $result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {	
            // echo "<h4>Research Paper Id: ".$row['id']."</h4>";	
            echo "<li><b>Faculty Id:</b>&nbsp;&nbsp;".$row['faculty_id']."<br></li>";
			echo "<li><b>Name: </b>&nbsp;&nbsp;".$row['first_name']." ".$row['middle_name']."".$row['last_name']."<br></li>";
            echo "<li><b>Sr. No.: </b>&nbsp;&nbsp;".$row['sr_no']."<br></li>";
			echo "<li><b>Patent Office: </b>&nbsp;&nbsp;".$row['patent_office']."<br></li>";
			echo "<li><b>Ipr Type: </b>&nbsp;&nbsp;".$row['ipr_type']."<br></li>";	
			echo "<li><b>Number: </b>&nbsp;&nbsp;".$row['number']."<br></li>";
			echo "<li><b>Design No.: </b>&nbsp;&nbsp;".$row['design_no']."<br></li>";
			echo "<li><b>Date: </b>&nbsp;&nbsp;".$row['date']."<br></li>";	
			echo "<li><b>Team member-1: </b>&nbsp;&nbsp;".$row['team_1']."<br></li>";
			echo "<li><b>Team member-2: </b>&nbsp;&nbsp;".$row['team_2']."<br></li>";
			echo "<li><b>Team member-3: </b>&nbsp;&nbsp;".$row['team_3']."<br></li>";
			echo "<li><b>Class: </b>&nbsp;&nbsp;".$row['club']."<br></li>";
			echo "<li><b>Date Of Issue: </b>&nbsp;&nbsp;".$row['date_of_issue']."<br></li>";
			echo "<li><b>Date of Renew: </b>&nbsp;&nbsp;".$row['date_of_renew']."<br></li>";
			echo "<li><b>Application Form File: </b>&nbsp;&nbsp;".$row['app_form_file']."<a class='download_btn' href=\"./pdf/$row[app_form_file]\" target='_blank'><button>View</button></a>"."<br></li>";
		}
	}
	?>
    
</div><br>
</body>
</html>