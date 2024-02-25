<?php

function isNextMondayAfterLatvianIndependenceDayHoliday($year) {
  // Define Latvian Independence Day
  $independenceDay = new DateTimeImmutable("$year-11-18");

  // Check if Independence Day falls on Saturday or Sunday
  if ($independenceDay->format('w') === '0' || $independenceDay->format('w') === '6') {
    // Get the next Monday after Independence Day
    $nextMonday = $independenceDay->modify('+1 week')->modify('next monday');

    // Check if next Monday is a public holiday (replace with your actual holiday check)
    // This is a placeholder, you should replace it with your logic to check holidays
    $isHoliday = $nextMonday->format('m-d') === '01-01' || $nextMonday->format('m-d') === '11-18';

    return $isHoliday;
  }

  return false;
}

// Read form data
$startYear = isset($_POST['start_year']) ? (int)$_POST['start_year'] : null;
$endYear = isset($_POST['end_year']) ? (int)$_POST['end_year'] : null;

// Validate data
if (is_null($startYear) || is_null($endYear) || !is_int($startYear) || !is_int($endYear) || $startYear > $endYear || $startYear < 0 || $endYear < 0) {
  echo "Error: Invalid input. Please enter two positive integers with start year less than or equal to end year.";
  exit;
}

// Loop through years and print results
for ($year = $startYear; $year <= $endYear; $year++) {
  $isHoliday = isNextMondayAfterLatvianIndependenceDayHoliday($year);
  echo "Year $year: " . ($isHoliday ? 'Next Monday after Independence Day is a holiday' : 'Next Monday after Independence Day is not a holiday') . PHP_EOL;
}


