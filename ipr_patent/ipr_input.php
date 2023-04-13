<?php
    include("../db_connect.php");
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $faculty_id = $_POST['faculty_id'];
        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $last_name = $_POST['last_name'];
        $sr_no = $_POST['sr_no'];
        $patent_office = $_POST['patent_office'];
        $ipr_type = $_POST['ipr_type'];
        $number = $_POST['number'];
        $design_no = $_POST['design_no'];
        $date = $_POST['date'];
        $team_1 = $_POST['team_1'];
        $team_2 = $_POST['team_2'];
        $team_3 = $_POST['team_3'];
        $club = $_POST['club'];
        $date_of_issue = $_POST['date_of_issue'];
        $date_of_renew = $_POST['date_of_renew'];

        if (isset($_FILES['app_form_file']['name']))
        {
          $app_form_file = $_FILES['app_form_file']['name'];
          $file_tmp = $_FILES['app_form_file']['tmp_name'];
 
          move_uploaded_file($file_tmp,"./pdf/".$app_form_file);
 
          $insertquery ="INSERT INTO ipr_patent_details (faculty_id, first_name, middle_name, last_name, sr_no, patent_office, ipr_type, number, design_no, date, team_1, team_2, team_3, club, date_of_issue, date_of_renew, app_form_file, status)
          VALUES ('$faculty_id', '$first_name', '$middle_name', '$last_name', '$sr_no', '$patent_office', '$ipr_type', $number, '$design_no', '$date', '$team_1', '$team_2', '$team_3', '$club', '$date_of_issue', '$date_of_renew', '$app_form_file',1)";

          // $iquery = mysqli_query($conn, $insertquery);
            if ($conn->query($insertquery) === TRUE) {
            echo "New record created successfully";
            echo "<br>";
            echo "<a href=\"ipr_output.php\">View Data</a>";
            } else {
            echo "Error: " . $insertquery . "<br>" . $conn->error;
            }
          }
        else{
    ?>
            <div class="alert alert-danger alert-dismissible
            fade show text-center">
              <a class="close" data-dismiss="alert" aria-label="close"></a>
              <strong>Failed!</strong>
                  File must be uploaded in PDF format!
            </div>
          <?php
        }
    }

    // // using sql to create a data entry query
    // $sql = "INSERT INTO research_paper_details (publications, index_rp, type_rp , title_article, journal_magazine_title, impact_factor, vol_no, doi, q_factor, publication_month, publication_year, publication_date, page_no, author, co_author, no_of_author, department, university, country, role, current_status, link_article, file_article, link_journal, abstract, status) VALUES ('$publications', '$index_rp', '$type_rp', '$title_article', '$j_m_title', '$impact_factor', '$vol_no', '$doi', '$q_factor', '$publication_month', '$publication_year','$publication_date', '$pg_no', '$author', '$co_author', '$no_of_author', '$department', '$university', '$country' ,'$role', '$current_status', '$link_article', '$file_article', '$link_journal', '$abstract', 1)";

    

    // $conn->close();

?>

