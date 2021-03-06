<?php 
	class RepeatCounter
	{
		/*
			Function: countRepeats
			Arguments: $wordToMatch: string of the word you want to count
			           $stringToMatch: string to count the amount of occurences of $wordToMatch
			Returns: int containing amount of times wordToMatch occurs in $stringToMatch
		*/
		function countRepeats($wordToMatch, $stringToMatch)
		{
			return preg_match_all("/\b" . strtolower($wordToMatch) . "\b/", strtolower($stringToMatch));
		}
	}
?>
