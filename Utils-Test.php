<?php
class UtilsTest extends PHPUnit_Framework_TestCase{
	public function setUp(){
		require_once 'Utils.php';
	}
	public function testSortArray(){
		$test=array('chien','chat','souris');
		$result=Utils::sortArray($test);
		$expected=array('chat','chien','souris');
		$this->assertEquals($expected,$result);
	}
	
}