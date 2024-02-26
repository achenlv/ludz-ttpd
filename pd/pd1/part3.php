<?php
header('Content-Type: text/plain');

function isHoliday($year){
  $day = new DateTimeImmutable("$year-11-18 00:00:00", new DateTimeZone("Europe/Riga"));
  $currentTime = new DateTimeImmutable();

  if ($day->format('w') == 6 || $day->format('w') == 0) { 
	  #echo "$year: Is holiday " . PHP_EOL;
	$tense= ($day < $currentTime) ? 'was ' : 'will be '; 
  } 
  else { 
	#echo "$year:  Is not Holiday" . PHP_EOL;
	$tense= ($day < $currentTime) ? 'was not ' : 'will be not';
  };
  echo "The next Monday after November 18, $year, $tense a Holiday" . PHP_EOL;
};

isHoliday("2023"); 
isHoliday("2024");
