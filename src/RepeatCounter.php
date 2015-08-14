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
			$count = 0;
			/*
				$pos starts at -1 because in the while loop it is being set to the new position
				of the next apearence of the string +1 so we set it to -1 so it starts at 0
				Also the boolean expression is set to !== instead of != because with strpos !=
				would not work as expected
			*/
			$pos = -1;
			while(($pos = strpos(strtolower($stringToMatch), strtolower($wordToMatch), $pos + 1)) !== false) {
				$count += 1;
			}
			return $count;
		}
	}
?>