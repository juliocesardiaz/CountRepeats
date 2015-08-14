<?php 
	class RepeatCounter
	{
		function countRepeats($wordToMatch, $stringToMatch)
		{
			$count = 0;
			$pos = -1;
			while(($pos = strpos(strtolower($stringToMatch), strtolower($wordToMatch), $pos + 1)) !== false) {
				$count += 1;
			}
			return $count;
		}
	}
?>