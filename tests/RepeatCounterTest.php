<?php 
	require_once "src/RepeatCounter.php";
	
	class RepeatCounterTest extends PHPUnit_Framework_TestCase
	{
		function testOneWord(){	
			//Arrange
			$test = new RepeatCounter;
			$inputWord = "An";
			$inputString = "An";
			
			//Act
			$result = $test->countRepeats($inputWord, $inputString);
			
			//Assert
			$this->assertEquals(1, $result);
			
		}
			
	}
?>