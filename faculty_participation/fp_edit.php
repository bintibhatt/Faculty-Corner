<?php
session_start();
    require('../db_connect.php');
    $id=$_REQUEST['id'];
    $query = "SELECT * from faculty_participation_details where id='".$id."'"; 
    $result = mysqli_query($conn, $query) or die ( mysqli_error());
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Faculty Participation</title>
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
            margin-left: 27.5%;
        }

        .ictlogo_header {
            width: 15%;
            float: right;
            padding-top: 0.5%;
            padding-right: 1%;
            margin-left: 27.5%;
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
            $status = "1";
            if(isset($_POST['submit']) && $status==1)
            {
            $id=$_REQUEST['id'];
            $sr_no = $_REQUEST['sr_no'];
            $first_name = $_REQUEST['first_name'];
            $middle_name = $_REQUEST['middle_name'];
            $last_name = $_REQUEST['last_name'];
            $emp_id = $_REQUEST['emp_id'];
            $event = $_REQUEST['event'];
            $title_of_event = $_REQUEST['title_of_event'];
            $organised_by = $_REQUEST['organised_by'];
            $organised_at = $_REQUEST['organised_at'];
            $city = $_REQUEST['city'];
            $state = $_REQUEST['state'];
            $country = $_REQUEST['country'];
            $start_date = $_REQUEST['start_date'];
            $end_date = $_REQUEST['end_date'];
            $in_collab_by = $_REQUEST['in_collab_by'];
            $no_of_days = $_REQUEST['no_of_days'];
            $level = $_REQUEST['level'];
            $mode = $_REQUEST['mode'];
            // $submittedby = $_SESSION["root"];

            $update="UPDATE faculty_participation_details SET first_name = '$first_name', middle_name = '$middle_name', last_name = '$last_name', emp_id = '$emp_id', event = '$event', title_of_event = '$title_of_event', organised_by = '$organised_by', organised_at = '$organised_at', city = '$city', state = '$state', country = '$country', start_date = '$start_date', end_date = '$end_date', in_collab_by = '$in_collab_by', no_of_days = '$no_of_days', level = '$level', mode = '$mode', status = 1 WHERE id=$id"; 
            mysqli_query($conn, $update) or die(mysqli_error());
            $status = 'Record Updated Successfully'. "</br></br><a href='fp_output.php'>View Updated Record</a>";
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
        <a href="fp_output.php"><button class="back_btn">Back</button></a>
    </div>
        <div class="form_container">
        <form method="POST" action="">
            <table class="form_table">
                <tr>
                    <th><label>Sr. No.</label></th>
                    <td><input type="number" name="sr_no" class="t_field" value="<?php echo $row['sr_no'];?>"></td>
                    <th><label>First Name</label></th>
                    <td><input type="text" name="first_name" class="t_field" value="<?php echo $row['first_name'];?>"></td>
                </tr>
                <br>
                <tr>
                    <th><label>Middle Name</label></th>
                    <td><input type="text" name="middle_name" class="t_field" value="<?php echo $row['middle_name'];?>"></td>
                    <th><label>Last Name</label></th>
                    <td><input type="text" name="last_name" class="t_field" value="<?php echo $row['last_name'];?>"></td>
                </tr>

                <tr>
                    <th><label>Employee Id</label></th>
                    <td><input type="number" name="emp_id" class="t_field" value="<?php echo $row['emp_id'];?>"></td>
                    <th><label>Event</label></th>
                    <td>
                        <select id="event" name="event" class="dd_field">
                            <option value="none" selected disabled hidden>Select an Option</option>
                            <option value="Workshop">Workshop</option>
                            <option value="FDP">FDP</option>
                            <option value="STTP">STTP</option>
                            <option value="Webinar">Webinar</option>
                            <option value="Seminar">Seminar</option>
                            <option value="National Conference">National Conference</option>
                            <option value="State COnference">State COnference</option>
                            <option value="International Conference">International Conference</option>
                            <option value="Symposium">Symposium</option>
                            <option value="Other">Other</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <th><label>Title of Event</label></th>
                    <td><input type="text" name="title_of_event" class="t_field" value="<?php echo $row['title_of_event'];?>"></td>
                    <th><label>Organised by</label></th>
                    <td><input type="text" name="organised_by" class="t_field" value="<?php echo $row['organised_by'];?>"></td>
                </tr>

                <tr>
                    <th><label>Organised at</label></th>
                    <td><input type="text" name="organised_at" class="t_field" value="<?php echo $row['organised_at'];?>"></td>
                    <th><label>City</label></th>
                    <td><input type="text" name="city" class="t_field" value="<?php echo $row['city'];?>"></td>

                </tr>

                <tr>
                    <th><label>State</label></th>
                    <td><input type="text" name="state" class="t_field" value="<?php echo $row['state'];?>"></td>
                    <th><label>Country</label></th>
                    <td><input type="text" name="country" class="t_field" value="<?php echo $row['country'];?>"></td>
                </tr>

                <tr>
                    <th><label>Start date</label></th>
                    <td><input type="date" name="start_date" class="t_field" value="<?php echo $row['start_date'];?>"></td>
                    <th><label>End Date</label></th>
                    <td><input type="date" name="end_date" class="t_field" value="<?php echo $row['end_date'];?>"></td>
                </tr>

                <tr>
                    <th><label>In collaboration by</label></th>
                    <td><input type="text" name="in_collab_by" class="t_field" value="<?php echo $row['in_collab_by'];?>"></td>
                    <th><label>No. of days</label></th>
                    <td><input type="number" name="no_of_days" class="t_field" value="<?php echo $row['no_of_days'];?>"></td>
                </tr>

                <tr>
                    <th><label>Level</label></th>
                    <td>
                        <select id="level" name="level" class="dd_field">
                            <option value="none" selected disabled hidden>Select an Option</option>
                            <option value="University">University</option>
                            <option value="State">State</option>
                            <option value="National">National</option>
                            <option value="International">International</option>
                        </select>
                    </td>
                    <th><label>Mode</label></th>
                    <td>
                        <select id="mode" name="mode" class="dd_field">
                            <option value="none" selected disabled hidden>Select an Option</option>
                            <option value="Online">Online</option>
                            <option value="Offline">Offline</option>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <th><label>Certificate</label></th>
                    <td><input type="file" name="certificate[]" class="t_field" multiple="multiple"></td>
                    
                    <th><label>Event Photos</label></th>
                    <td><input type="file" name="event_img[]" class="t_field" multiple="multiple"></td>
                </tr>
            </table>
            <br>
            <input type="submit" name="submit" class="submit_btn">
        </form>
        </div>
    </div>
</body>
</html>