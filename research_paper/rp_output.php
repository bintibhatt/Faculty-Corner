<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        <?php include 'css/rp_output.css'; ?>
    </style>
    <title>Research Paper Details</title>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;1,100&display=swap" rel="stylesheet">
    </head>
<body>
    <header class="header_container">
        <img class="mulogo_header" src="../images/MU_Logo.png" alt="MU logo">
        <h1 class="title">Faculty Accreditation</h1>
        <img class="ictlogo_header" src="../images/ICT_logo_text.png" alt="MU logo">
    </header>
    <a href="../dashboard.php" style="margin-left:2.5%;"><button>Home</button></a><br><br>

    <div class="nav_div" style="background-color:lightblue;">
	    <h2 style="margin-left:40%;">Research Paper Details</h2>
    </div>
    
    <a href="research_paper.php"><button>Add New Data</button></a><br><br>
    <div class="main_div" >
    <table id="details_table" class="display"  cellspacing="0">
        <thead>
            <tr bgcolor='#21c8de'>
			<th>Title of Article</th>
			<th>Publications</th>
            <th>Index</th>
            <th>Type</th>
			<th>Journal/Magazine Title</th>
			<th>Impact Factor</th>
			<th>Volumne No.</th>
			<th>DOI</th>
			<th>Q-Factor</th>
			<th>Publication month</th>
			<th>Publication year</th>
			<th>Publication date</th>
			<th>Page No.</th>
			<th>Author First Name</th>
			<th>Author Middle Name</th>
            <th>Author Last Name</th>
			<th>Department</th>
			<th>University</th>
            <th>Country</th>
            <th>Role</th>
			<th>Co-Author</th>
            <th>No. of Authors</th>
            <th>Current Status</th>
			<th>Link of Article</th>
            <th>Link of Journal</th>
            <th></th>
		</tr>
        </thead>
    </table>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js" charset="utf8" type="text/javascript"></script>

    <script type="text/javascript">
        let session_id;
        $.ajax({
            method: "POST",
            url: "./get_session_id.php",
            })
            .done(function( response ) {
                session_id = response;
            });
    $(document).ready(function() {
        $('#details_table').dataTable({
            scrollX: true,
            "processing": true,
            "ajax": "rp_datatable_fetch.php",

            // var id = table.row(this).data.id;

            "columns": [
                {data: 'title_article'},
                {data: 'publications'},
                {data: 'index_rp'},
                {data: 'type_rp'},
                {data: 'journal_magazine_title'},
                {data: 'impact_factor'},
                {data: 'vol_no'},
                {data: 'doi'},
                {data: 'q_factor'},
                {data: 'publication_month'},
                {data: 'publication_year'},
                {data: 'publication_date'},
                {data: 'page_no'},
                {data: 'author_first_name'},
                {data: 'author_middle_name'},
                {data: 'author_last_name'},
                {data: 'department'},
                {data: 'university'},
                {data: 'country'},
                {data: 'role'},
                {data: 'co_author'},
                {data: 'no_of_author'},
                {data: 'current_status'},
                {data: 'link_article'},
                {data: 'link_journal'},
                {
                    data: 'id',
                    title: 'title_article',
                    // data: 'title_article'
                    render : function(data, title, type, row) {
                        if(session_id == "1327"){
                            return '<td><form action="rp_view.php" method="POST"><input type="hidden" class="ved" style="width:30px;" name="id" value='+data+'></input><textarea  class="ved" style="width:30px;" name="title" hidden>'+type.title_article+'</textarea><input type="hidden" class="ved" style="width:30px;" name="id" value='+data+'></input><input type="submit" value="View"></form></td><td><form action="rp_edit.php" method="POST"><input type="hidden" class="ved" style="width:30px;" name="id" value='+data+'></input><input type="submit" value="Edit"></form></td> <td><form action="rp_delete.php" method="POST"><input type="hidden" class="ved" style="width:30px;" name="id" value='+data+'></input><input type="submit" value="Delete"></form></td>';
                        }
                        else{
                            return '<td><form action="rp_view.php" method="POST"><input type="hidden" class="ved" style="width:30px;" name="id" value='+data+'></input><textarea  class="ved" style="width:30px;" name="title" hidden>'+type.title_article+'</textarea><input type="submit" value="View"></form></td>';
                        }
                        
                        
                    }
                }
            ],
            dom: 'Bfrtip',
            lengthMenu: [
            [ 5, 10, 25, 50],
            [ '5 Files', '10 Files', '25 Files', '50 Files' ]
            ],
            buttons: [
            { extend: 'copy', text: 'Copy' },
            { extend: 'print', text: 'Print'},
            { extend: 'excel', text: 'Export to Excel', filename:'IPR Patent Details' },
            'pageLength'
            ],
        });
    });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
    </div>
    <br><br>
<div>
    <div class="nav_div" style="background-color:lightblue;">
	    <h2 style="margin-left:44%;">Author Details</h2>
    </div>
<a href="rp_add_authors.php"><button>Add New Data</button></a><br><br>           
<div class="author_div" >
    <table id="author_details_table" class="display"  cellspacing="0">
        <thead>
            <tr bgcolor='#21c8de'>
			<th>First Name</th>
			<!-- <th>Middle Name</th> -->
            <th>Last Name</th>
            <th>Email</th>
            <th>Research Paper Name</th>
			<th>Department</th>
			<th>University</th>
            <th>Country</th>
		</tr>
        </thead>
    </table>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js" charset="utf8" type="text/javascript"></script>

    <script type="text/javascript">
        // let session;
        $.ajax({
            method: "POST",
            url: "./get_session_id.php",
            })
            .done(function( response ) {
                session_id = response;
            });
    $(document).ready(function() {
        $('#author_details_table').dataTable({
            scrollX: true,
            "processing": true,
            "ajax": "rp_author_datatable_fetch.php",

            // var id = table.row(this).data.id;

            "columns": [
                {data: 'first_name'},
                // {data: 'middle_name'},
                {data: 'last_name'},
                {data: 'email'},
                {data: 'research_paper_name'},
                {data: 'department'},
                {data: 'university'},
                {data: 'country'}
            ],
            dom: 'Bfrtip',
            lengthMenu: [
            [ 5, 10, 25, 50],
            [ '5 Files', '10 Files', '25 Files', '50 Files' ]
            ],
            buttons: [
            { extend: 'copy', text: 'Copy' },
            { extend: 'print', text: 'Print'},
            { extend: 'excel', text: 'Export to Excel', filename:'IPR Patent Details' },
            'pageLength'
            ],
        });
    });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
    </div>

</div>
<!-- <a href="./author_output.php"><button>View Author Details</button></a><br><br></div> -->
</div>
</body>
</html>