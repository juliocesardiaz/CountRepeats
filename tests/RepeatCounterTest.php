<?php 
	require_once "src/RepeatCounter.php";
	
	class RepeatCounterTest extends PHPUnit_Framework_TestCase
	{
		function testOne(){	
			//Arrange
			$test = new RepeatCounter;
			$inputWord = "An";
			$inputString = "An";
			
			//Act
			$result = $test->countRepeats($inputWord, $inputString);
			
			//Assert
			$this->assertEquals(1, $result);
			
		}
		
		function testTwo(){	
			//Arrange
			$test = new RepeatCounter;
			$inputWord = "no";
			$inputString = "no way";
			
			//Act
			$result = $test->countRepeats($inputWord, $inputString);
			
			//Assert
			$this->assertEquals(1, $result);
			
		}
		
		function testThree(){	
			//Arrange
			$test = new RepeatCounter;
			$inputWord = "bat";
			$inputString = "The bat swung";
			
			//Act
			$result = $test->countRepeats($inputWord, $inputString);
			
			//Assert
			$this->assertEquals(1, $result);
			
		}
		
		function testFour(){	
			//Arrange
			$test = new RepeatCounter;
			$inputWord = "no";
			$inputString = "No way man, no way";
			
			//Act
			$result = $test->countRepeats($inputWord, $inputString);
			
			//Assert
			$this->assertEquals(2, $result);
			
		}
		
		function testFive(){	
			//Arrange
			$test = new RepeatCounter;
			$inputWord = "hello";
			$inputString = "hello john hello gabriel hello dog hello cat hello evil monster hello";
			
			//Act
			$result = $test->countRepeats($inputWord, $inputString);
			
			//Assert
			$this->assertEquals(6, $result);
			
		}
	}
?>