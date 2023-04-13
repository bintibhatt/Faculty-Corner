<?php
    include("../db_connect.php");
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $sr_no = $_POST['sr_no'];
        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $last_name = $_POST['last_name'];
        $emp_id = $_POST['emp_id'];
        $event = $_POST['event'];
        $title_of_event = $_POST['title_of_event'];
        $organised_by = $_POST['organised_by'];
        $organised_at = $_POST['organised_at'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $country = $_POST['country'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $in_collab_by = $_POST['in_collab_by'];
        $no_of_days = $_POST['no_of_days'];
        $level = $_POST['level'];
        $mode = $_POST['mode'];
        // $certificate1 = $_POST['certificate1'];
        // $certficate2 = $_POST['certificate2'];
        // $certificate3 = $_POST['certificate3'];
        // $event_img1 = $_POST['event_img1'];
        // $event_img2 = $_POST['event_img2'];
        // $event_img3 = $_POST['event_img3'];
        $certificate_tmp = array_filter($_FILES['certificate']['tmp_name']);
        $certificate = array_filter($_FILES['certificate']['name']);
        $certificate_count = count($_FILES['certificate']['tmp_name']);

        $event_img_temp = array_filter($_FILES['event_img']['tmp_name']);
        $event_img = array_filter($_FILES['event_img']['name']);
        $event_img_count = count($_FILES['event_img']['tmp_name']);

        for($i = 0; $i < $certificate_count; $i++){
          move_uploaded_file($certificate_tmp[$i],"./certificate/".$certificate[$i]);
        }

        for($i = 0; $i < $event_img_count; $i++){
          move_uploaded_file($event_img_temp[$i],"./event_img/".$event_img[$i]);
        }
        

          $insertquery ="INSERT INTO faculty_participation_details(sr_no, first_name, middle_name , last_name, emp_id, event, title_of_event, organised_by, organised_at, city, state, country, start_date, end_date, in_collab_by, no_of_days, level, mode, status) 
          VALUES ('$sr_no', '$first_name', '$middle_name', '$last_name', '$emp_id', '$event', '$title_of_event', '$organised_by', '$organised_at', '$city', '$state','$country', '$start_date', '$end_date', '$in_collab_by', '$no_of_days', '$level', '$mode', 1)";
          // $iquery = mysqli_query($conn, $insertquery);
            if ($conn->query($insertquery) === TRUE) {
            echo "New record created successfully";
            echo "<br>";
            echo "<a href=\"fp_output.php\">View Data</a>";

            $getEventId = "SELECT MAX(id) as id FROM faculty_participation_details";
            $result = $conn->query($getEventId);
            $row = $result->fetch_assoc();
            $id = $row["id"];

            for($i = 0; $i < $certificate_count; $i++){
              $insertCertificate = "INSERT INTO fp_certificate_details(event_id, certificate) VALUES ('$id', '$certificate[$i]')";
              $conn->query($insertCertificate);
            }
            
            for($i=0; $i < $event_img_count; $i++){
              $insertEventImg = "INSERT INTO fp_event_img_details(event_id, event_img) VALUES ('$id', '$event_img[$i]')";
              $conn->query($insertEventImg);
            }

            }
            else {
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
    

    // // using sql to create a data entry query
    // $sql = "INSERT INTO research_paper_details (publications, index_rp, type_rp , title_article, journal_magazine_title, impact_factor, vol_no, doi, q_factor, publication_month, publication_year, publication_date, page_no, author, co_author, no_of_author, department, university, country, role, current_status, link_article, file_article, link_journal, abstract, status) VALUES ('$publications', '$index_rp', '$type_rp', '$title_article', '$j_m_title', '$impact_factor', '$vol_no', '$doi', '$q_factor', '$publication_month', '$publication_year','$publication_date', '$pg_no', '$author', '$co_author', '$no_of_author', '$department', '$university', '$country' ,'$role', '$current_status', '$link_article', '$file_article', '$link_journal', '$abstract', 1)";

    

    // $conn->close();

?>

