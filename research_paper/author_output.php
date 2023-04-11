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
    
	<h2 style="margin-left:40%;">Author Details</h2>
    <a href="rp_add_authors.php"><button>Add New Data</button></a><br><br>
    <div class="main_div" >
    <table id="author_details_table" class="display"  cellspacing="0">
        <thead>
            <tr bgcolor='#21c8de'>
			<th>First Name</th>
			<th>Middle Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Research Paper Name</th>
			<th>Department</th>
			<th>University</th>
            <th>Country</th>
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
        $('#author_details_table').dataTable({
            scrollX: true,
            "processing": true,
            "ajax": "rp_author_datatable_fetch.php",

            // var id = table.row(this).data.id;

            "columns": [
                {data: 'first_name'},
                {data: 'middle_name'},
                {data: 'last_name'},
                {data: 'email'},
                {data: 'research_paper_name'},
                {data: 'department'},
                {data: 'university'},
                {data: 'country'},
                {
                    data: 'id',
                    render : function(data, type, row) {
                        if(session_id == "1327"){
                            document.cookie = "id="+data;
                            return '<td><form action="rp_view.php" method="POST"><input type="hidden" class="ved" style="width:30px;" name="id" value='+data+'></input><input type="submit" value="View"></form></td><td><form action="rp_edit.php" method="POST"><input type="hidden" class="ved" style="width:30px;" name="id" value='+data+'></input><input type="submit" value="Edit"></form></td> <td><form action="rp_delete.php" method="POST"><input type="hidden" class="ved" style="width:30px;" name="id" value='+data+'></input><input type="submit" value="Delete"></form></td>';
                        }
                        else{
                            return '<td><form action="rp_view.php" method="POST"><input type="hidden" class="ved" style="width:30px;" name="id" value='+data+'></input><input type="submit" value="View"></form></td>';
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

</div>
<a href="./rp_output.php"><button>Back to Research Paper Details</button></a><br><br></div>
</body>
</html>