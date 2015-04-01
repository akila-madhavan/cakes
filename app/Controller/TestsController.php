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
        public function git_test(){
            echo "test";
            echo "my second test on git";
        }
        
        public function second_git_test(){
            echo "fine all";
        }
        public function sthrd_git_test(){
            echo "fine third";
        }
}
	
	
