<?php

function isNextMondayAfterLatvianIndependenceDayHoliday($year) {
  // Define Latvian independence day
  $independenceDay = new DateTimeImmutable("$year-02-23");

  // Check if independence day is on Saturday or Sunday
  if ($independenceDay->format('w') == 6 || $independenceDay->format('w') == 0) {
    // Get next Monday
    $nextMonday = $independenceDay->modify('+1 week')->modify('next monday');

    // Check if next Monday is a public holiday (replace with your logic)
    // This is a placeholder, replace with actual holiday checking logic for Latvia
    $isHoliday = $nextMonday->format('m-d') === '05-01'; // Example: Check for May 1st

    //return $isHoliday;
    return true;
  }

  return false;
}

// Test cases
$years = [2023, 2024, 2025];

foreach ($years as $year) {
  $isHoliday = isNextMondayAfterLatvianIndependenceDayHoliday($year);
  echo "Year $year: " . ($isHoliday ? "Holiday" : "Not a holiday") . PHP_EOL;
}
