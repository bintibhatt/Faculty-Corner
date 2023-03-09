<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="./images/ICT-log.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Research Paper Details Entry</title>
    <style>
        <?php include "../css/research_paper.css"; ?>
    </style>
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> -->
</head>

<body>
    <header class="header_container">
        <img class="mulogo_header" src="../images/MU_Logo.png" alt="MU logo">
        <img class="ictlogo_header" src="../images/ICT_logo_text.png" alt="MU logo">
    </header>
    <h1>Faculty Accreditation</h1>
    <h2 style="margin-left:45%;">Author Details</h2>
    <div class="form_container" style="width:60%;margin-left:20%;">
        <form method="POST" action="rp_author_input.php">
            <table class="form_table"style="margin-left:15%;">
                <tr>
                    <th><label>First Name</label></th>
                    <td><input type="text" name="first_name" class="t_field"><br></td></tr>
                    <tr><th><label>Last Name</label></th>
                    <td><input type="text" name="last_name" class="t_field"><br></td></tr>
                    <tr><th><label>Email</label></th>
                    <td><input type="text" name="email" class="t_field"><br></td></tr>
                    <tr><th><label>Research Paper Name</label></th>
                    <td><input type="text" name="research_paper_name" class="t_field"><br></td></tr>
                    <tr><th><label>Department</label></th>
                    <td><input type="text" name="department" class="t_field"><br></td></tr>
                    <tr><th><label>University</label></th>
                    <td><input type="text" name="university" class="t_field"><br></td></tr>
                    <tr><th><label>Country</label></th>
                    <td><input type="text" name="country" class="t_field"><br></td>
                </tr>
                
            </table>
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