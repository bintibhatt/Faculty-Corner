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

        .rp_div{
            background-color: #c9e1f4;
            align-items: flex-start;
            padding: 10px;
            position: center;
            width: 80%;
            border: 1px solid;
            box-sizing: border-box;
            border-radius: 15px;
            margin-left: 10%;
            font-size: 20px;
        }

        button{
            margin-top:0.5%;
            margin-left:47%;
            width:70px;
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

    <div class="rp_div">
	<?php 
    
	include("db_connect.php");
    $id=$_REQUEST['id'];
    $sql = "SELECT * FROM research_paper_details WHERE id='".$id."'";
    $result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {	
            echo "<h4>Research Paper Id: ".$row['id']."</h4>";	
			echo "<b>Publications: </b>".$row['publications']."<br>"."<br>";
            echo "<b>Index: </b>".$row['index_rp']."<br>"."<br>";
            echo "<b>Type: </b>".$row['type_rp']."<br>"."<br>";
            echo "<b>Title of article: </b>".$row['title_article']."<br>"."<br>";
			echo "<b>Journal/Magazine Title: </b>".$row['journal_magazine_title']."<br>"."<br>";
			echo "<b>Impact Factor: </b>".$row['impact_factor']."<br>"."<br>";	
			echo "<b>Volume No.: </b>".$row['vol_no']."<br>"."<br>";
			echo "<b>DOI: </b>".$row['doi']."<br>"."<br>";
			echo "<b>Q-factor: </b>".$row['q_factor']."<br>"."<br>";	
			echo "<b>Publication Month: </b>".$row['publication_month']."<br>"."<br>";
			echo "<b>Publication Year: </b>".$row['publication_year']."<br>"."<br>";
			echo "<b>Publication Date: </b>".$row['publication_date']."<br>"."<br>";
			echo "<b>Page No.: </b>".$row['page_no']."<br>"."<br>";
			echo "<b>Author: </b>".$row['author']."<br>"."<br>";
			echo "<b>Co-author: </b>".$row['co_author']."<br>"."<br>";	
			echo "<b>No. of author(s): </b>".$row['no_of_author']."<br>"."<br>";
			echo "<b>Role: </b>".$row['role']."<br>"."<br>";
			echo "<b>Current Status: </b>".$row['current_status']."<br>"."<br>";
			echo "<b>Link Article: </b>"."<a href=\"$row[link_article]\">$row[link_article]</a>"."<br>"."<br>";
			echo "<b>File of Article: </b>".$row['file_article']."<br>"."<br>";
			echo "<b>Link Journal: </b>"."<a href=\"$row[link_journal]\">$row[link_journal]</a>"."<br>"."<br>";	
			echo "<b>Abstract: </b>".$row['abstract'];
		}
	}
	?>
    
</div>
<div class="rp_author">
    <table>
    <tr bgcolor='#9CC9F6'>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Research Paper Name</th>
			</tr>
    <?php 
    
	include("db_connect.php");
    $rp_name=$_REQUEST['title_article'];
    $sql = "SELECT * FROM author_details WHERE research_paper_name='".$rp_name."'";
    $result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
            echo "<tr>";
			echo "<td>".$row['first_name']."</td>";
			echo "<td>".$row['last_name']."</td>";
        	echo "<td>".$row['email']."</td>";	
			echo "<td>".$row['research_paper_name']."</td>";
		}
	}
	?>
    </table>
</div>
<a href="rp_output.php"><button>Back</button></a>
</body>
</html>