<?php
    header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=research_paper_details.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");


    // $tabledata = $_POST['rp_details_table'];
    // function excel_file(){     
    // header("Content-Disposition: attachment; filename=\"research paper details.xls\"");
    // header("Content-Type: application/vnd.ms-excel;");
    // header("Pragma: no-cache");
    // header("Expires: 0");
    // $out = fopen("php://output", "w");
    // foreach ($tabledata as $data)
    // {
    //     fputcsv($out, $data,"\t");
    // }
    // fclose($out);
    // } 
    // if(isset($_GET['action']) && $_GET['action'] == 'xls')
    // {
    //     excel_file();
    //     exit;
    // }

    // $content - should have the content like
    // $content = $_POST['rp_details_table'];
    // // $content = "<table><tr><td>val1</td><td>val2</td></tr></table>";
    // header('Pragma: anytextexeptno-cache', true);
    // header("Content-type: application/vnd.ms-excel");
    // header('Content-Transfer-Encoding: Binary');
    // header("Content-disposition: attachment; filename=myfile.xls");
    // print $content;

    //     if(isset($_POST["export_data"])) {	
    // 	$filename = "rp_details".date('Ymd') . ".xls";			
    // 	header("Content-Type: application/vnd.ms-excel");
    // 	header("Content-Disposition: attachment; filename=\"$filename\"");	
    // 	$show_coloumn = false;
    // 	if(!empty($developer_records)) {
    // 	  foreach($developer_records as $record) {
    // 		if(!$show_coloumn) {
    // 		  // display field/column names in first row
    // 		  echo implode("\t", array_keys($record)) . "\n";
    // 		  $show_coloumn = true;
    // 		}
    // 		echo implode("\t", array_values($record)) . "\n";
    // 	  }
    // 	}
    // 	exit;  
    // }
?>