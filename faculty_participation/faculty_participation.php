<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="./images/ICT-log.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Participation</title>
    <style>
        <?php include "./css/faculty_participation.css"; ?>
    </style>
</head>

<body>
    <header class="header_container">
            <img class="mulogo_header" src="../images/MU_Logo.png" alt="MU logo">
            <h1 class="title">Faculty Corner</h1>
            <img class="ictlogo_header" src="../images/ICT_logo_text.png" alt="MU logo">
        </header>
        <h2 style="margin-left:37%;">Faculty Participation Details Entry</h2>
        <div class="container">
        <a href="fp_output.php"><button class="back_btn">Back</button></a></div>
    <div class="form_container">
        <form method="POST" action="fp_input.php" enctype="multipart/form-data">
            <table class="form_table">
                <tr>
                    <th><label>Sr. No.</label></th>
                    <td><input type="number" name="sr_no" class="t_field"></td>
                    <th><label>First Name</label></th>
                    <td><input type="text" name="first_name" class="t_field"></td>
                </tr>
                <br>
                <tr>
                    <th><label>Middle Name</label></th>
                    <td><input type="text" name="middle_name" class="t_field"></td>
                    <th><label>Last Name</label></th>
                    <td><input type="text" name="last_name" class="t_field"></td>
                </tr>

                <tr>
                    <th><label>Employee Id</label></th>
                    <td><input type="number" name="emp_id" class="t_field" onKeyDown="if(this.value.length==4 && event.keyCode!=8) return false;"></td>
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
                    <td><input type="text" name="title_of_event" class="t_field"></td>
                    <th><label>Organised by</label></th>
                    <td><input type="text" name="organised_by" class="t_field"></td>
                </tr>

                <tr>
                    <th><label>Organised at</label></th>
                    <td><input type="text" name="organised_at" class="t_field"></td>
                    <th><label>City</label></th>
                    <td><input type="text" name="city" class="t_field"></td>

                </tr>

                <tr>
                    <th><label>State</label></th>
                    <td><input type="text" name="state" class="t_field"></td>
                    <th><label>Country</label></th>
                    <td><input type="text" name="country" class="t_field"></td>
                </tr>

                <tr>
                    <th><label>Start date</label></th>
                    <td><input type="date" name="start_date" class="t_field"></td>
                    <th><label>End Date</label></th>
                    <td><input type="date" name="end_date" class="t_field"></td>
                </tr>

                <tr>
                    <th><label>In collaboration by</label></th>
                    <td><input type="text" name="in_collab_by" class="t_field"></td>
                    <th><label>No. of days</label></th>
                    <td><input type="number" name="no_of_days" class="t_field"></td>
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
            <p style="margin-left:5%; font-size:15px;"><b>Request to enter all the details and if its not available currently, then put "-" as the value. Also you can select multiple files from one option by selecting them altogether.</b></p>
            <input style="margin-top:0.5%;"type="submit" name="submit" class="submit_btn">
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="tableExport/tableExport.js"></script>
    <script type="text/javascript" src="tableExport/jquery.base64.js"></script>
    <script src="js/export.js"></script>
    <script>
        function numberOnly(id) {
        // Get element by id which passed as parameter within HTML element event
        var element = document.getElementById(id);
        // This removes any other character but numbers as entered by user
        element.value = element.value.replace(/[^0-9]/gi, "");
    }
    </script>
</body>

</html>