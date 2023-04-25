<?php
session_start();
?>
<html>
<head>	
	<title>Research Paper</title>
	<style>
        body{
            font-family: 'Inter', sans-serif;
        }
        
        .header_container{
            width: 100%;
            display:flex;
        }

        a{
            color:black;
        }

        .mulogo_header {
            width: 13%;
            align-content: left;
        }

        .title{
            margin-left: 24%;
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

        .rp_author{
            background-color: #c9e9f4;
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
        <h1 class="title">Faculty Corner</h1>
        <img class="ictlogo_header" src="../images/ICT_logo_text.png" alt="MU logo">
    </header>
    <div class="container">
        <a href="rp_output.php"><button class="back_btn">Back</button></a>
    </div>

    <div class="rp_div">
	<?php 
    
	include("../db_connect.php");
    $id = $_POST['id'];
    $sql = "SELECT * FROM research_paper_details WHERE id='".$id."'";
    $result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {	
            // echo "<h4>Research Paper Id: ".$row['id']."</h4>";	
            echo "<h3 class='id_title'>".$row['title_article']."</h3><br>";
			echo "<li><b>Publications: </b>&nbsp;&nbsp;".$row['publications']."<br></li>";
            echo "<li><b>Index: </b>&nbsp;&nbsp;".$row['index_rp']."<br></li>";
            echo "<li><b>Type: </b>&nbsp;&nbsp;".$row['type_rp']."<br></li>";
            echo "<li><b>Title of article: </b>&nbsp;&nbsp;".$row['title_article']."<br></li>";
			echo "<li><b>Journal/Magazine Title: </b>&nbsp;&nbsp;".$row['journal_magazine_title']."<br></li>";
			echo "<li><b>Impact Factor: </b>&nbsp;&nbsp;".$row['impact_factor']."<br></li>";	
			echo "<li><b>Volume No.: </b>&nbsp;&nbsp;".$row['vol_no']."<br></li>";
			echo "<li><b>DOI: </b>&nbsp;&nbsp;".$row['doi']."<br></li>";
			echo "<li><b>Q-factor: </b>&nbsp;&nbsp;".$row['q_factor']."<br></li>";	
			echo "<li><b>Publication Month: </b>&nbsp;&nbsp;".$row['publication_month']."<br></li>";
			echo "<li><b>Publication Year: </b>&nbsp;&nbsp;".$row['publication_year']."<br></li>";
			echo "<li><b>Publication Date: </b>&nbsp;&nbsp;".$row['publication_date']."<br></li>";
			echo "<li><b>Page No.: </b>&nbsp;&nbsp;".$row['page_no']."<br></li>";
			echo "<li><b>Author Full Name: </b>&nbsp;&nbsp;".$row['author_first_name']." ".$row['author_middle_name']." ".$row['author_last_name']."<br></li>";
			echo "<li><b>Co-author: </b>&nbsp;&nbsp;".$row['co_author']."<br></li>";	
            echo "<li><b>Department: </b>&nbsp;&nbsp;".$row['department']."<br></li>";
			echo "<li><b>University: </b>&nbsp;&nbsp;".$row['university']."<br></li>";	
			echo "<li><b>No. of author(s): </b>&nbsp;&nbsp;".$row['no_of_author']."<br></li>";
			echo "<li><b>Role: </b>&nbsp;&nbsp;".$row['role']."<br></li>";
			echo "<li><b>Current Status: </b>&nbsp;&nbsp;".$row['current_status']."<br></li>";
			echo "<li><b>Link Article: </b>&nbsp;&nbsp;"."<a href=\"$row[link_article]\">$row[link_article]</a>"."<br></li>";
			echo "<li><b>File of Article: </b>&nbsp;&nbsp;".$row['file_article']."<a class='download_btn' href=\"./pdf/$row[file_article]\" target='_blank'><button>View</button></a>"."<br></li>";
			echo "<li><b>Link Journal: </b>&nbsp;&nbsp;"."<a href=\"$row[link_journal]\">$row[link_journal]</a>"."<br></li>" ;	
			echo "<li><b>Abstract: </b>&nbsp;&nbsp;".$row['abstract'];
		}
	}
	?>
    
</div><br>
<h3 style="margin-left:11%;">Author Details</h3><br>
<div class="rp_author">
    <table>
    <tr bgcolor='#86c3d1'>
				<th>First Name</th>
                <th>Middle Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Department</th>
                <th>University</th>
                <th>Country</th>
			</tr>
    <?php 
    
	include("../db_connect.php");
    $id = $_POST['id'];
    $rp_name=$_POST['title'];
    $sql = "SELECT * FROM author_details WHERE research_paper_name='".$rp_name."'";
    $result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
            echo "<tr>";
			echo "<td>".$row['first_name']."</td>";
            echo "<td>".$row['middle_name']."</td>";
			echo "<td>".$row['last_name']."</td>";
        	echo "<td>"."<a href=mailto:".$row['email'].">".$row['email']."</a>"."</td>";	
			echo "<td>".$row['department']."</td>";
            echo "<td>".$row['university']."</td>";
            echo "<td>".$row['country']."</td>";
		}
	}
	?>
    </table>
</div>

</body>
</html>