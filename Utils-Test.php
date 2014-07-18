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
	public function testIsPremierWithPremier(){
		$this->assertEquals(true,Utils::isPremier(3));
		$this->assertEquals(true,Utils::isPremier(7));
		$this->assertEquals(true,Utils::isPremier(13));
	}
		public function testIsNotPremierWithPremier(){
		$this->assertEquals(false,Utils::isPremier(4));
		$this->assertEquals(false,Utils::isPremier());
		$this->assertEquals(false,Utils::isPremier(18));
	}
}