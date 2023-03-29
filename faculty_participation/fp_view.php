<html>
<head>	
	<title>Research Paper View</title>
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

        .container{
            display:flex;
        }

        .container h1{
            width:75%;
        }

        .container a {
            margin-top:2%;
            height:25px;    
        }

        .container button {
            background-color:DodgerBlue;
            border-color:DodgerBlue;
            width:100%;
            height:25px;   
            color:white;
            text-align: center;
            text-decoration: none;
            font-size: 15px;
            border-radius:10%; 
        }

        .rp_div{
            background-color: #c9e1f4;
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
            background-color:DodgerBlue;
            color:white;
            text-align: center;
            text-decoration: none;
            margin-left:2%;
            font-size: 15px;
            border-radius:10%;
            border-color:DodgerBlue;
        }

        .rp_author{
            background-color: #c9e1f4;
            align-items: flex-start;
            padding: 30px;
            position: center;
            width: 80%;
            border: 1px solid;
            box-sizing: border-box;
            border-radius: 10px;
            margin-left: 10%;
            font-size: 20px;
        }

        .id_title{
            text-align: center;
        }

        .rp_author td,th {
            padding: 10px;
            position: center;
            font-size: 20px;
        }

        .title{
            margin-left: 11%;
        }

        .back_btn button{
            margin-top:05%;
            margin-left:47%;
            width:50%;
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
        <h1 class="title">Faculty Accreditation</h1><a href="fp_output.php"><button class="back_btn">Back</button></a>
    </div>

    <div class="rp_div">
	<?php 
    
	include("db_connect.php");
    $id=$_REQUEST['id'];
    $sql = "SELECT * FROM faculty_participation_details WHERE id='".$id."'";
    $result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {	
            // echo "<h4>Research Paper Id: ".$row['id']."</h4>";	
            echo "<h3 class='id_title'>".$row['title_of_event']."</h3><br>";
			echo "<li><b>Sr. No.: </b>&nbsp;&nbsp;".$row['sr_no']."<br></li>";
            echo "<li><b>Name: </b>&nbsp;&nbsp;".$row['first_name']."  ".$row['middle_name']."  ".$row['last_name']."<br></li>";
			echo "<li><b>Employee Id: </b>&nbsp;&nbsp;".$row['emp_id']."<br></li>";
			echo "<li><b>Event: </b>&nbsp;&nbsp;".$row['event']."<br></li>";	
			echo "<li><b>Title of Event: </b>&nbsp;&nbsp;".$row['title_of_event']."<br></li>";
			echo "<li><b>Organised by: </b>&nbsp;&nbsp;".$row['organised_by']."<br></li>";
			echo "<li><b>Organised at: </b>&nbsp;&nbsp;".$row['organised_at']."<br></li>";	
			echo "<li><b>City: </b>&nbsp;&nbsp;".$row['city']."<br></li>";
			echo "<li><b>State: </b>&nbsp;&nbsp;".$row['state']."<br></li>";
			echo "<li><b>Country: </b>&nbsp;&nbsp;".$row['country']."<br></li>";
			echo "<li><b>Start date: </b>&nbsp;&nbsp;".$row['start_date']."<br></li>";
			echo "<li><b>End date: </b>&nbsp;&nbsp;".$row['end_date']."<br></li>";
			echo "<li><b>In collaboration by: </b>&nbsp;&nbsp;".$row['in_collab_by']."<br></li>";	
            echo "<li><b>No. of days: </b>&nbsp;&nbsp;".$row['no_of_days']."<br></li>";
			echo "<li><b>Level: </b>&nbsp;&nbsp;".$row['level']."<br></li>";	
			echo "<li><b>Mode: </b>&nbsp;&nbsp;".$row['mode']."<br></li>";

            
		}
	}

    $sql = "SELECT * FROM fp_certificate_details WHERE event_id='".$id."'";
    $result = $conn->query($sql);
    echo "<li><b>Certificates: </b>&nbsp;&nbsp;</li>";
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['certificate']."<a class='download_btn' href=\"./certificate/$row[certificate]\"><button>View</button></a>"."<br>";
		}
	}

    $sql = "SELECT * FROM fp_event_img_details WHERE event_id='".$id."'";
    $result = $conn->query($sql);
    echo "<li><b>Event Photos: </b>&nbsp;&nbsp;</li>";
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			// echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['event_img']."<a class='download_btn' href=\"./event_img/$row[event_img]\"><button>View</button></a>"."<br>";

            echo "<img style='width:30%; height:30%;' src='event_img/".$row['event_img']."' >"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
            
		}
	}


	?>
    
</div>

</body>
</html>