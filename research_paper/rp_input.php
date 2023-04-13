<?php
    include("../db_connect.php");
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $publications = $_POST['publications'];
        $index_rp = $_POST['index_rp'];
        $type_rp = $_POST['type_rp'];
        $title_article = $_POST['title_article'];
        $j_m_title = $_POST['j_m_title'];
        $impact_factor = $_POST['impact_factor'];
        $vol_no = $_POST['vol_no'];
        $doi = $_POST['doi'];
        $q_factor = $_POST['q_factor'];
        $publication_month = $_POST['publication_month'];
        $publication_year = $_POST['publication_year'];
        $publication_date = $_POST['publication_date'];
        $pg_no = $_POST['pg_no'];
        $author_first_name = $_POST['author_first_name'];
        $author_middle_name = $_POST['author_middle_name'];
        $author_last_name = $_POST['author_last_name'];
        $department = $_POST['department'];
        $university = $_POST['university'];
        $country = $_POST['country'];
        $role = $_POST['role'];
        $co_author = $_POST['co_author'];
        $no_of_author = $_POST['no_of_authors'];
        $current_status = $_POST['current_status'];
        $link_article = $_POST['link_article'];
        // $file_article = $_POST['file_article'];
        $link_journal = $_POST['link_journal'];
        $abstract = $_POST['abstract'];

        if (isset($_FILES['file_article']['name']))
        {
          $file_article = $_FILES['file_article']['name'];
          $file_tmp = $_FILES['file_article']['tmp_name'];
 
          move_uploaded_file($file_tmp,"./pdf/".$file_article);
 
          $insertquery ="INSERT INTO research_paper_details(publications, index_rp, type_rp , title_article, journal_magazine_title, impact_factor, vol_no, doi, q_factor, publication_month, publication_year, publication_date, page_no, author_first_name, author_middle_name, author_last_name, department, university, country, role, co_author, no_of_author, current_status, link_article, file_article, link_journal, abstract, status) 
          VALUES ('$publications', '$index_rp', '$type_rp', '$title_article', '$j_m_title', '$impact_factor', '$vol_no', '$doi', '$q_factor', '$publication_month', '$publication_year','$publication_date', '$pg_no', '$author_first_name', '$author_middle_name', '$author_last_name', '$department', '$university', '$country' ,'$role', '$co_author', '$no_of_author', '$current_status', '$link_article', '$file_article', '$link_journal', '$abstract', 1)";
          // $iquery = mysqli_query($conn, $insertquery);
            if ($conn->query($insertquery) === TRUE) {
            echo "New record created successfully";
            echo "<br>";
            echo "<a href=\"rp_output.php\">View Data</a>";
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

