<?php
App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel'.DS.'classes'.DS.'PHPExcel.php'));
App::import('Vendor', 'PHPExcel_IOFactory', array('file' => 'PHPExcel'.DS.'classes'.DS.'PHPExcel'.DS.'IOFactory.php'));
class TestsController extends AppController {
	public function test1(){
		$this->layout=false;

		
	}
	public function export(){
		$this->layout=false;

		
	}
}
	
	