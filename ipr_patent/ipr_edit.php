<?php
session_start();
    include('../db_connect.php');
    if(!isset($_POST['submit']))
    {
        $_SESSION['id'] = $_POST['id'];
    }
    $id = $_SESSION['id'];
    $query = "SELECT * from ipr_patent_details where id='".$id."'"; 
    $result = mysqli_query($conn, $query) or die ( mysqli_error());
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
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

        .form_container {
            background-color: #c9e9f4;
            align-items: flex-start;
            padding: 10px;
            position: center;
            width: 90%;
            height: 85%;
            border: 1px solid;
            box-sizing: border-box;
            border-radius: 5px;
            margin-left: 5%;
            font-size: 17px;
        }

        .dd_field {
            margin: 5px;
            width: 358px;
            height: 40px;
        }

        .t_field {
            margin: 5px;
            width: 350px;
            height: 35px;
        }

        .form_table {
            margin-left: 5%;
            margin-right: 4%;
        }

        .form_table td {
            width: 15%;
        }

        .form_table th {
            width: 15%;
            text-align: left;
        }

        .submit_btn {
            margin-left: 50%;
            width: 100px;
            height: 40px;
            background-color: #21c8de;
            border-color: #21c8de;
            text-align: center;
            text-decoration: none;
            font-size: 15px;
            border-radius: 5px;
            margin-bottom: 1%;
        }

        .back_btn {
            background-color: #21c8de;
            border-color: #21c8de;
            width: 7%;
            height: 30px;
            text-align: center;
            text-decoration: none;
            font-size: 15px;
            border-radius: 5px;
            margin-left: 5%;
            margin-bottom: 1%;
        }

        input,
        select,
        textarea {
            border-radius: 10px;
            border-color: white;
        }
    </style>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body>
    
    <div class="form">
        <?php
        // include('db_connect.php');
            $status = "1";
            if(isset($_POST['submit']) && $status==1)
            {
                $faculty_id = $_POST['faculty_id'];
                $first_name = $_POST['first_name'];
                $middle_name = $_POST['middle_name'];
                $last_name = $_POST['last_name'];
                $sr_no = $_POST['sr_no'];
                $patent_office = $_POST['patent_office'];
                $ipr_type = $_POST['ipr_type'];
                $design_no = $_POST['design_no'];
                $date = $_POST['date'];
                $team_1 = $_POST['team_1'];
                $team_2 = $_POST['team_2'];
                $team_3 = $_POST['team_3'];
                $club = $_POST['club'];
                $date_of_issue = $_POST['date_of_issue'];
                $date_of_renew = $_POST['date_of_renew'];
                $id1 = $_POST['spe_id'];
                $update="UPDATE ipr_patent_details SET faculty_id='$faculty_id', first_name='$first_name', middle_name='$middle_name' , last_name='$last_name', sr_no='$sr_no', patent_office='$patent_office', ipr_type='$ipr_type', design_no='$design_no', date='$date', team_1='$team_1', team_2='$team_2', team_3='$team_3', club='$club', date_of_issue='$date_of_issue', date_of_renew='$date_of_renew' WHERE id=$id1"; 
            mysqli_query($conn, $update) or die(mysqli_error());
            $status = 'Record Updated Successfully'. "</br></br><a href='ipr_output.php'>View Updated Record</a>";
            echo '<p style="color:#FF0000;">'.$status.'</p>';
        }
        ?>
        <header class="header_container">
            <img class="mulogo_header" src="../images/MU_Logo.png" alt="MU logo">
            <h1 class="title">Faculty Corner</h1>
            <img class="ictlogo_header" src="../images/ICT_logo_text.png" alt="MU logo">
        </header>
        <h2 style="margin-left:45%;">Update Record</h2>
        <div class="container">
        <a href="ipr_output.php"><button class="back_btn">Back</button></a>
    </div>
        <div class="form_container">
        <form method="POST" action="">
            <p style="text-align:center; font-size:80%;"><b>Please ensure that all details are entered, and if certain information is currently unavailable, please use "-" as the placeholder value. Also, kindly ensure that all dropdown menus are filled.</b></p>
            <br>
            <table class="form_table">
                <tr>
                    <th><label>Faculty Id</label></th>
                    <td><input type="text" name="faculty_id" class="t_field" value="<?php echo $row['faculty_id'];?>"></td>
                    <th><label>First Name</label></th>
                    <td><input type="text" name="first_name" class="t_field" value="<?php echo $row['first_name'];?>"></td>
                </tr>
                
                <tr>
                    <th><label>Middle Name</label></th>
                    <td><input type="text" name="middle_name" class="t_field" value="<?php echo $row['middle_name'];?>"></td>
                    <th><label>Last Name</label></th>
                    <td><input type="text" name="last_name" class="t_field" value="<?php echo $row['last_name'];?>"></td>
                </tr>
                
                <tr>
                    <th><label>Patent Office</label></th>
                    <td>
                        <select id="patent_office" name="patent_office" class="dd_field">
                            <option value="none" selected disabled hidden>Select an Option</option>
                            <option value="Government of India">Government Of India</option>
                        </select>
                    </td>
                    <th><label>IPR Type</label></th>
                    <td>
                        <select id="ipr_type" name="ipr_type" class="dd_field">
                            <option value="none" selected disabled hidden>Select an Option</option>
                            <option value="Design Patent">Design Patent</option>
                            <option value="Utility Patent">Utility Patent</option>
                            <option value="Ideation Patent">Ideation Patent</option>
                            <option value="Copyright Patent">Copyright Patent</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <th><label>Design No.</label></th>
                    <td><input type="text" name="design_no" class="t_field" value="<?php echo $row['design_no'];?>"></td>
                    <th><label>Number</label></th>
                    <td><input type="text" name="number" class="t_field" value="<?php echo $row['number'];?>"></td>
                </tr>

                <tr>
                    <th><label>Date</label></th>
                    <td><input type="date" name="date" class="t_field" value="<?php echo $row['date'];?>"></td>
                    <th><label>Team Member 1</label></th>
                    <td><input type="text" name="team_1" class="t_field" value="<?php echo $row['team_1'];?>"></td>
                </tr>

                <tr>
                    <th><label>Team Member 2</label></th>
                    <td><input type="text" name="team_2" class="t_field" value="<?php echo $row['team_2'];?>"></td>
                    <th><label>Team Member 3</label></th>
                    <td><input type="text" name="team_3" class="t_field" value="<?php echo $row['team_3'];?>"></td>
                </tr>

                <tr>
                    <th><label>Class</label></th>
                    <td><input type="text" name="club" class="t_field" value="<?php echo $row['club'];?>"></td>
                    <th><label>Date of Issue</label></th>
                    <td><input type="date" name="date_of_issue" class="t_field" value="<?php echo $row['date_of_issue'];?>"></td>
                </tr>

                <tr>
                    <th><label>Date of Renew</label></th>
                    <td><input type="date" name="date_of_renew" class="t_field" value="<?php echo $row['date_of_renew'];?>"></td>
                    <th><label>Application Form(Pdf)</label></th>
                    <td><input type="file" name="app_form_file" class="t_field" value="<?php echo $row['app_form_file'];?>"></td>
                </tr>
            </table>
            <input type="hidden" name="spe_id" value="<?php echo $id; ?>">
            <br>
            <input type="submit" name="submit" class="submit_btn">
        </form>
        </div>
    </div>
</body>
</html>