<?php
session_start();
    require('db_connect.php');
    $id=$_REQUEST['id'];
    $query = "SELECT * from research_paper_details where id='".$id."'"; 
    $result = mysqli_query($conn, $query) or die ( mysqli_error());
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Update Record</title>
    <style>
        <?php include "./css/research_paper.css"; ?>
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
            $publications = $_REQUEST['publications'];
            $index_rp = $_REQUEST['index_rp'];
            $type_rp = $_REQUEST['type_rp'];
            $title_article = $_REQUEST['title_article'];
            $j_m_title = $_REQUEST['j_m_title'];
            $impact_factor = $_REQUEST['impact_factor'];
            $vol_no = $_REQUEST['vol_no'];
            $doi = $_REQUEST['doi'];
            $q_factor = $_REQUEST['q_factor'];
            $publication_month = $_REQUEST['publication_month'];
            $publication_year = $_REQUEST['publication_year'];
            $publication_date = $_REQUEST['publication_date'];
            $pg_no = $_REQUEST['pg_no'];
            $author_first_name = $_REQUEST['author_first_name'];
            $author_middle_name = $_REQUEST['author_middle_name'];
            $author_last_name = $_REQUEST['author_last_name'];
            $co_author = $_REQUEST['co_author'];
            $no_of_author = $_REQUEST['no_of_authors'];
            $department = $_REQUEST['department'];
            $university = $_REQUEST['university'];
            $country = $_REQUEST['country'];
            $role = $_REQUEST['role'];
            $current_status = $_REQUEST['current_status'];
            $link_article = $_REQUEST['link_article'];
            $file_article = $_REQUEST['file_article'];
            $link_journal = $_REQUEST['link_journal'];
            $abstract = $_REQUEST['abstract'];
            // $submittedby = $_SESSION["root"];

            $update="UPDATE research_paper_details SET publications='$publications', index_rp='$index_rp', type_rp='$type_rp' , title_article='$title_article', journal_magazine_title='$j_m_title', impact_factor='$impact_factor', vol_no=$vol_no, doi='$doi', q_factor='$q_factor', publication_month='$publication_month', publication_year=$publication_year, publication_date='$publication_date', page_no=$pg_no, author_first_name='$author_first_name', author_middle_name='$author_middle_name', author_last_name='$author_last_name', co_author='$co_author', no_of_author=$no_of_author, department='$department', university='$university', country='$country', role='$role', current_status='$current_status', link_article='$link_article', file_article='$file_article', link_journal='$link_journal', abstract='$abstract' WHERE id=$id"; 
            mysqli_query($conn, $update) or die(mysqli_error());
            $status = 'Record Updated Successfully'. "</br></br><a href='rp_output.php'>View Updated Record</a>";
            echo '<p style="color:#FF0000;">'.$status.'</p>';
        }
        ?>
        <header class="header_container">
            <img class="mulogo_header" src="../images/MU_Logo.png" alt="MU logo">
            <img class="ictlogo_header" src="../images/ICT_logo_text.png" alt="MU logo">
        </header>
        <div class="container">
            <h1 class="title">Faculty Accreditation</h1>
        </div>
        <h2 style="margin-left:45%;">Update Record</h2>
        <div class="form_container">
        <form method="POST" action="">
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
                        <select id="type_rp" name="type_rp" class="dd_field" >
                            <option value="none" selected disabled hidden>Select an Option</option>
                            <option value="Journal">Journal</option>
                            <option value="Conference">Conference</option>
                            <option value="Book-Chapter">Book-chapter</option>
                        </select>
                    </td>
                    <th><label>Title of Article</label></th>
                    <td><input type="text" name="title_article" class="t_field" value="<?php echo $row['title_article'];?>"></td>
                </tr>

                <tr>
                    <th><label>Journal/Magazine Name</label></th>
                    <td><input type="text" name="j_m_title" class="t_field" value="<?php echo $row['journal_magazine_title'];?>"></td>
                    <th><label>Impact Factor</label></th>
                    <td><input type="text" name="impact_factor" class="t_field" value="<?php echo $row['impact_factor'];?>"></td>
                </tr>

                <tr>
                    <th><label>Volumne No.</label></th>
                    <td><input type="text" name="vol_no" class="t_field" value="<?php echo $row['vol_no'];?>"></td>
                    <th><label>DOI</label></th>
                    <td><input type="text" name="doi" class="t_field" value="<?php echo $row['doi'];?>"></td>
                </tr>

                <tr>
                    <th><label>Q Factor</label></th>
                    <td><input type="text" name="q_factor" class="t_field" value="<?php echo $row['q_factor'];?>"></td>
                    <th><label>Month of Publication</label></th>
                    <td><input type="text" name="publication_month" class="t_field" value="<?php echo $row['publication_month'];?>"></td>

                </tr>

                <tr>
                    <th><label>Year of Publication</label></th>
                    <td><input type="number" name="publication_year" class="t_field" value="<?php echo $row['publication_year'];?>"></td>
                    <th><label>Publication Date</label></th>
                    <td><input type="date" name="publication_date" class="t_field" value="<?php echo $row['publication_date'];?>"></td>
                </tr>

                <tr>
                    <th><label>Page No.</label></th>
                    <td><input type="number" name="pg_no" class="t_field" value="<?php echo $row['page_no'];?>"></td>
                    <th><label>Author First Name</label></th>
                    <td><input type="text" name="author_first_name" class="t_field" value="<?php echo $row['author_first_name'];?>"></td>
                </tr>

                <tr>
                    <th><label>Author Middle Name</label></th>
                    <td><input type="text" name="author_middle_name" class="t_field" value="<?php echo $row['author_middle_name'];?>"></td>
                    <th><label>Author First Name</label></th>
                    <td><input type="text" name="author_last_name" class="t_field" value="<?php echo $row['author_last_name'];?>"></td>
                </tr>

                <tr>
                    <th><label>Co-author (if any)</label></th>
                    <td><input type="text" name="co_author" class="t_field" value="<?php echo $row['co_author'];?>"></td>
                    <th><label>Total no of authors</label></th>
                    <td><input type="text" name="no_of_authors" class="t_field" value="<?php echo $row['no_of_author'];?>"></td>
                </tr>

                <tr>
                    <th><label>Department</label></th>
                    <td><input type="text" name="department" class="t_field" value="<?php echo $row['department'];?>"></td>
                    <th><label>University</label></th>
                    <td><input type="text" name="university" class="t_field" value="<?php echo $row['university'];?>"></td>
                </tr>

                <tr>
                    <th><label>Country</label></th>
                    <td><input type="text" name="country" class="t_field" value="<?php echo $row['country'];?>"></td>
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
                    <td><input type="text" name="current_status" class="t_field" value="<?php echo $row['current_status'];?>"></td>
                    <th><label>Link of article</label></th>
                    <td><input type="url" name="link_article" class="t_field" value="<?php echo $row['link_article'];?>"></td>
                </tr>
                <tr>
                    <th><label>File of article</label></th>
                    <td><input type="file" name="file_article" class="t_field" value="<?php echo $row['file_article'];?>"></td>
                    <th><label>Link of journal</label></th>
                    <td><input type="url" name="link_journal" class="t_field" value="<?php echo $row['link_journal'];?>"></td>
                </tr>
            </table>
            <label style="margin-left:5%;"><b>Abstract</b></label>
            <textarea rows="4" cols="128" name="abstract" style="margin-left:10.7%;"><?php echo $row['abstract'];?></textarea>
            <br>
            <input type="submit" name="submit" class="submit_btn">
        </form>
        </div>
    </div>
</body>
</html>