<?php
#header('Content-Type: text/plain');

# , ["options" => ["min_range" => 0 , "max_range"=> 2100]]
$sy=$_POST['startYear'];
$ey=$_POST['endYear']; 

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
  echo "The next Monday after November 18, $year, $tense a Holiday</br>" . PHP_EOL;
};
for ($i = $sy; $i <= $ey; $i++) {

isHoliday($i); 

}; 

#if (isset($_POST['startYear']) && isset($_POST['endYear'])) {
#  $startYear = filter_input(INPUT_POST, 'startYear', FILTER_VALIDATE_INT);
#  $endYear = filter_input(INPUT_POST, 'endYear', FILTER_VALIDATE_INT);
#
#  for ($year = $startYear; $year <= $endYear; $year++) {
#	  isHoliday($year);
#  }  
#}

?>
