<?php

include './phpfiles/funciones.php';


$inputFileName = './precios/MenuFinal.xlsx';


try {
    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    $objPHPExcel = $objReader->load($inputFileName);
} catch (Exception $e) {
    die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME) . '": ' . $e->getMessage());
}

//  Get worksheet dimensions
$sheet = $objPHPExcel->getSheet(0);
$highestRow = $sheet->getHighestRow();
$highestColumn = $sheet->getHighestDataColumn();

//  Loop through each row of the worksheet in turn
for ($row = 1; $row <= $highestRow; $row++) {
    //  Read a row of data into an array
    $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
    //  Insert row data array into your database of choice here
    //echo 'A' . $row . ':' . $highestColumn . $row . "<br>";

    /* $arrlength = count($rowData[0]);
      for ($x = 0; $x < $arrlength; $x++) {
      echo $rowData[0][$x] . " ";
      }
      echo "<br>";
     */

    if (strcmp(trim($rowData[0][0]), 'Panini Grande') == 0) {
        array_push($paninisGrandes, new itemGeneral($rowData[0][0], 
                $rowData[0][1], 
                $rowData[0][2], 
                $rowData[0][3], 
                $rowData[0][4]));
    } elseif (strcmp(trim($rowData[0][0]), 'Panini Mediano') == 0) {
        array_push($paninisMedianos, new itemGeneral($rowData[0][0], 
                $rowData[0][1], 
                $rowData[0][2], 
                $rowData[0][3], 
                $rowData[0][4]));
        
    }elseif (strcmp(trim($rowData[0][0]), 'Crepas Dulces') == 0) {
        array_push($crepasDulces, new itemGeneral($rowData[0][0], 
                $rowData[0][1], 
                $rowData[0][2], 
                $rowData[0][3], 
                $rowData[0][4]));        
        
    }elseif (strcmp(trim($rowData[0][0]), 'Crepas Saladas') == 0) {
        array_push($crepasSaladas, new itemGeneral($rowData[0][0], 
                $rowData[0][1], 
                $rowData[0][2], 
                $rowData[0][3], 
                $rowData[0][4]));        
        
    }elseif (strcmp(trim($rowData[0][0]), 'Bebidas') == 0) {
        array_push($bebidas, new itemGeneral($rowData[0][0], 
                $rowData[0][1], 
                $rowData[0][2], 
                $rowData[0][3], 
                $rowData[0][4]));        
        
    }elseif (strcmp(trim($rowData[0][0]), 'Helado Frito') == 0) {
        array_push($heladoFrito, new itemGeneral($rowData[0][0], 
                $rowData[0][1], 
                $rowData[0][2], 
                $rowData[0][3], 
                $rowData[0][4]));        
        
    }elseif (strcmp(trim($rowData[0][0]), 'Postres') == 0) {
        array_push($postres, new itemGeneral($rowData[0][0], 
                $rowData[0][1], 
                $rowData[0][2], 
                $rowData[0][3], 
                $rowData[0][4]));       
    }
}
?>