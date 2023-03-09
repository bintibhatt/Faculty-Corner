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
    <h2 style="margin-left:40%;">Research Paper Details</h2>
    <a href="./rp_output.php"><button class="back_btn">Back</button></a>
    <br>
    <div class="form_container">
        <form method="POST" action="rp_input.php" enctype="multipart/form-data">
            <table class="form_table">
                <tr>
                    <th><label>Publications</label></th>
                    <td>
                        <select id="publications" name="publications" class="dd_field">
                            <option value="none" selected disabled hidden>Select an Option</option>
                            <option value="National">National</option>
                            <option value="International">International</option>
                            <option value="Local">Local</option>
                            <option value="National/International">National and International</option>
                        </select>
                    </td>
                    <th><label>Index</label></th>
                    <td>
                        <select id="index" name="index_rp" class="dd_field">
                            <option value="none" selected disabled hidden>Select an Option</option>
                            <option value="SCI">SCI</option>
                            <option value="SCOPUS">SCOPUS</option>
                            <option value="UGC">UGC</option>
                        </select>
                    </td>
                </tr>
                <br>
                <tr>
                    <th><label>Type</label></th>
                    <td>
                        <select id="type_rp" name="type_rp" class="dd_field">
                            <option value="none" selected disabled hidden>Select an Option</option>
                            <option value="Journal">Journal</option>
                            <option value="Conference">Conference</option>
                            <option value="Book-Chapter">Book-chapter</option>
                        </select>
                    </td>
                    <th><label>Title of Article</label></th>
                    <td><input type="text" name="title_article" class="t_field"></td>
                </tr>

                <tr>
                    <th><label>Journal/Magazine Name</label></th>
                    <td><input type="text" name="j_m_title" class="t_field"></td>
                    <th><label>Impact Factor</label></th>
                    <td><input type="text" name="impact_factor" class="t_field"></td>
                </tr>

                <tr>
                    <th><label>Volumne No.</label></th>
                    <td><input type="text" name="vol_no" class="t_field"></td>
                    <th><label>DOI</label></th>
                    <td><input type="text" name="doi" class="t_field"></td>
                </tr>

                <tr>
                    <th><label>Q Factor</label></th>
                    <td><input type="text" name="q_factor" class="t_field"></td>
                    <th><label>Month of Publication</label></th>
                    <td><input type="text" name="publication_month" class="t_field"></td>

                </tr>

                <tr>
                    <th><label>Year of Publication</label></th>
                    <td><input type="number" name="publication_year" class="t_field"></td>
                    <th><label>Publication Date</label></th>
                    <td><input type="date" name="publication_date" class="t_field"></td>
                </tr>

                <tr>
                    <th><label>Page No.</label></th>
                    <td><input type="number" name="pg_no" class="t_field"></td>
                    <th><label>Author</label></th>
                    <td><input type="text" name="author" class="t_field"></td>
                </tr>

                <tr>
                    <th><label>Co-author (if any)</label></th>
                    <td><input type="text" name="co_author" class="t_field"></td>
                    <th><label>Total no of authors</label></th>
                    <td><input type="text" name="no_of_authors" class="t_field"></td>
                </tr>

                <tr>
                    <th><label>Department</label></th>
                    <td><input type="text" name="department" class="t_field"></td>
                    <th><label>University</label></th>
                    <td><input type="text" name="university" class="t_field"></td>
                </tr>

                <tr>
                    <th><label>Country</label></th>
                    <td><input type="text" name="country" class="t_field"></td>
                    <th><label>Your Role</label></th>
                    <td>
                        <select id="role" name="role" class="dd_field">
                            <option value="none" selected disabled hidden>Select an Option</option>
                            <option value="Principal author">Principal Author</option>
                            <option value="Corresponding author">Corresponding Author</option>
                            <option value="Supervisor">Supervisor</option>
                            <option value="Mentor">Mentor</option>
                            <option value="Other">Other</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <th><label>Current status of work</label></th>
                    <td><input type="text" name="current_status" class="t_field"></td>
                    <th><label>Link of article</label></th>
                    <td><input type="url" name="link_article" class="t_field"></td>
                </tr>
                <tr>
                    <th><label>File of article</label></th>
                    <td><input type="file" name="file_article" class="t_field"></td>
                    <th><label>Link of journal</label></th>
                    <td><input type="url" name="link_journal" class="t_field"></td>
                </tr>
            </table>
            <label style="margin-left:5%;"><b>Abstract</b></label>
            <textarea rows="4" cols="128" name="abstract" style="margin-left:10.7%;"></textarea>
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