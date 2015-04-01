<?php
require_once 'PHPExcel.php';

                /** PHPExcel_Cell_AdvancedValueBinder */
                require_once 'PHPExcel/Cell/AdvancedValueBinder.php';

                /** PHPExcel_IOFactory */
                require_once 'PHPExcel/IOFactory.php';

                // Set value binder
                PHPExcel_Cell::setValueBinder( new PHPExcel_Cell_AdvancedValueBinder() );

                // Create new PHPExcel object
                $objPHPExcel = new PHPExcel();
                $objPHPExcel->getProperties()->setTitle("My DB Export");
                $objPHPExcel->getProperties()->setSubject("My DB Export");
                $objPHPExcel->getProperties()->setKeywords("My DB office 2007 openxml php");

                // Add some data
                $objPHPExcel->setActiveSheetIndex(0);

                $hfer = '&C&HExported from My DB Unclassified/FOUO';
                $objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddHeader($hfer);
                $objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddFooter($hfer);

                $objPHPExcel->getActiveSheet()->setCellValue('A1','MaitrePylos');

                // redirect output to client browser

                header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                header('Content-Disposition: attachment;filename="MyDB.xlsx"');
                header('Cache-Control: max-age=0');

                $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
                $objWriter->save('php://output');
				?>