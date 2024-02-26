<?php
#header('Content-Type: text/plain');

$startYear="2020";
$endYear="2024";

function isHoliday($year){
  $day = new DateTimeImmutable("$year-11-18 00:00:00", new DateTimeZone("Europe/Riga"));
  $currentTime = new DateTimeImmutable();

  if ($day->format('w') == 6 || $day->format('w') == 0) {
          #echo "$year: Is holiday " . PHP_EOL;
        $tense= ($day < $currentTime) ? 'was not ' : 'will be ';
  }
  else {
        #echo "$year:  Is not Holiday" . PHP_EOL;
        $tense= ($day < $currentTime) ? 'was not ' : 'will be ';
  };
  echo "The next Monday after November 18, $year, $tense a Holiday" . PHP_EOL;
};

for ($y = 1; $y <= 10, $y++) {
	echo "$y";
	//	isHoliday("2024")i;
} 
echo phpinfo();
?>
