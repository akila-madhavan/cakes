<?php
$tabname = array('person');
$header = array('persheader');

if (!empty($tabname)) {
//require_once 'PHPExcel.php';
//require_once 'PHPExcel/IOFactory.php';
//pr($resultexport);
//pr($header);
//pr($tabname);
// Create new PHPExcel object
require_once 'C:/xampp/htdocs/cakes/app/vendor/PHPExcel/Classes/PHPExcel.php';
$objPHPExcel = new PHPExcel();
$tabNo = 0;
foreach($tabname as $tabkey => $tabvalue)
{
$objPHPExcel->createSheet();
// Create a first sheet, representing sales data
$objPHPExcel->setActiveSheetIndex($tabNo);

$key_name = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
$j = 2;
$header_array = $header[$tabkey];
//pr($header_array);

/*foreach ($header_array as $headerval) {
    $objPHPExcel->getActiveSheet()->setCellValue($key_name['0'].'1','pub_id');
    $objPHPExcel->getActiveSheet()->setCellValue($key_name['1'].'1','phi');
    $objPHPExcel->getActiveSheet()->setCellValue($key_name[$j].'1',$headerval);
    $j++;
    //echo $headerval;
}*/
//exit;
$objPHPExcel->getActiveSheet()->setCellValue('A1', 'Something')
        ->setCellValue('B1', "Lastname")
        ->setCellValue('C1', "Phone")
        ->setCellValue('D1', "Fax")
        ->setCellValue('E1', "Is Client ?");

//exit;
// Add data
$i = 2;$k = 0;$h=2;
 //$final_array = $resultexport[$tabkey];
 //pr($final_array);
/*foreach($final_array as $key => $array_one) {
    foreach($array_one as $key_one => $array_two){
    //echo $key_name[$k].$i."=> ".$val;
        foreach ($array_two as $key_two => $val )
        {
    //echo $val;
    //echo "<br>";
    $objPHPExcel->getActiveSheet()->setCellValue($key_name[$k].$i,$val);
        $k++;
        }
    }
    $k=0;
    //pr(array_values($val));
//    $objPHPExcel->getActiveSheet()->setCellValue('B'.$i,$val);
//    $objPHPExcel->getActiveSheet()->setCellValue('C'.$i,$val);
//    $objPHPExcel->getActiveSheet()->setCellValue('D'.$i,$val);
//    $objPHPExcel->getActiveSheet()->setCellValue('E'.$i,$val);

    // Add page breaks every 10 rows
    if ($i % 10 == 0) {
        // Add a page break
        $objPHPExcel->getActiveSheet()->setBreak('A' . $i, PHPExcel_Worksheet::BREAK_ROW);
    }
    $i++;
} */
$tabvalue = $tabname[$tabkey];
// Rename sheet
if($tabvalue == 'person')
    $tabvalue = 'Personal Information';
else
    $tabvalue= 'Worksheet';
//echo $tabvalue;
$objPHPExcel->getActiveSheet()->setTitle($tabvalue);
$tabNo++;
}

/*
// Create a new worksheet, after the default sheet
$objPHPExcel->createSheet();

// Add some data to the second sheet, resembling some different data types
$objPHPExcel->setActiveSheetIndex(1);
$objPHPExcel->getActiveSheet()->setCellValue('A1', 'More data');

// Rename 2nd sheet
$objPHPExcel->getActiveSheet()->setTitle('Second sheet'); */

// Redirect output to a clientâ€™s web browser (Excel5)
$filename = "Export_Patient_" . date("Y.m.d") . '-' . time() . '.xls';
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="'.basename($filename).'"');
header('Cache-Control: max-age=0');
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
}
?>