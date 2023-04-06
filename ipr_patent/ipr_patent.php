<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="./images/ICT-log.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPR Patent Details Entry</title>
    <style>
        <?php include "./css/ipr_patent.css"; ?>
    </style>
</head>

<body>
    <header class="header_container">
        <img class="mulogo_header" src="../images/MU_Logo.png" alt="MU logo">
        <h1 class="title">Faculty Accreditation</h1>
        <img class="ictlogo_header" src="../images/ICT_logo_text.png" alt="MU logo">
    </header>
    <h2 style="margin-left:40%;">IPR Patent Details</h2>
    <a href="./ipr_output.php"><button class="back_btn">Back</button></a>
    <br>
    <div class="form_container">
        <form method="POST" action="ipr_input.php" enctype="multipart/form-data">
            <table class="form_table">
                <tr>
                    <th><label>Faculty Id</label></th>
                    <td><input type="text" name="faculty_id" class="t_field"></td>
                    <th><label>First Name</label></th>
                    <td><input type="text" name="first_name" class="t_field"></td>
                </tr>
                
                <tr>
                    <th><label>Middle Name</label></th>
                    <td><input type="text" name="middle_name" class="t_field"></td>
                    <th><label>Last Name</label></th>
                    <td><input type="text" name="last_name" class="t_field"></td>
                </tr>
                
                <tr>
                    <th><label>Sr. No.</label></th>
                    <td><input type="text" name="sr_no" class="t_field"></td>
                    <th><label>Patent Office</label></th>
                    <td>
                        <select id="patent_office" name="patent_office" class="dd_field">
                            <option value="none" selected disabled hidden>Select an Option</option>
                            <option value="Government of India">Government Of India</option>
                        </select>
                    </td>
                </tr>

                <tr>
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
                    <th><label>Number</label></th>
                    <td><input type="text" name="number" class="t_field"></td>
                </tr>

                <tr>
                    <th><label>Design No.</label></th>
                    <td><input type="text" name="design_no" class="t_field"></td>
                    <th><label>Date</label></th>
                    <td><input type="date" name="date" class="t_field"></td>
                </tr>

                <tr>
                    <th><label>Team Member 1</label></th>
                    <td><input type="text" name="team_1" class="t_field"></td>
                    <th><label>Team Member 2</label></th>
                    <td><input type="text" name="team_2" class="t_field"></td>
                </tr>

                <tr>
                    <th><label>Team Member 3</label></th>
                    <td><input type="text" name="team_3" class="t_field"></td>
                    <th><label>Club</label></th>
                    <td><input type="text" name="club" class="t_field"></td>
                </tr>

                <tr>
                    <th><label>Date of Issue</label></th>
                    <td><input type="date" name="date_of_issue" class="t_field"></td>
                    <th><label>Date of Renew</label></th>
                    <td><input type="date" name="date_of_renew" class="t_field"></td>
                </tr>
                <tr>
                    <th><label>Application Form(Pdf)</label></th>
                    <td><input type="file" name="app_form_file" class="t_field"></td>
                </tr>
            </table>
            
            <p style="margin-left:25%;"><b>Request to enter all the details and if its not available currently, then put "-----" as the value.</b></p>
            <input style="margin-top:0.5%;"type="submit" name="submit" class="submit_btn">
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="tableExport/tableExport.js"></script>
    <script type="text/javascript" src="tableExport/jquery.base64.js"></script>
    <script src="js/export.js"></script>
</body>

</html>