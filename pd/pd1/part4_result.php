<?php

include 'part3.php'; // Include the function from Part 3

if (isset($_POST['startYear']) && isset($_POST['endYear'])) {
  $startYear = filter_input(INPUT_POST, 'startYear', FILTER_VALIDATE_INT);
  $endYear = filter_input(INPUT_POST, 'endYear', FILTER_VALIDATE_INT);

  if ($startYear !== false && $endYear !== false && $startYear <= $endYear && $startYear >= 1900) {
    for ($year = $startYear; $year <= $endYear; $year++) {
      $isHoliday = isNextMondayAfterLatvianIndependenceDayHoliday($year);
      echo "Year $year: " . ($isHoliday ? 'Next Monday after Independence Day is a holiday' : 'Next Monday after Independence Day is not a holiday') . '<br>';
    }
  } else {
    echo "Invalid input. Please enter valid year numbers (positive integers with start year less than or equal to end year).";
  }
} else {
  echo "Please enter the year range.";
}
?>
