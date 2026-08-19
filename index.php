<?php

$malaga_subject1 = 88;
$malaga_subject2 = 92;
$malaga_subject3 = 90;
$malaga_subject4 = 89;
$malaga_subject5 = 95;

$malaga_average = ($malaga_subject1 + $malaga_subject2 + $malaga_subject3 + $malaga_subject4 + $malaga_subject5) / 5;

if ($malaga_average >= 74.5) {
    $malaga_remarks = "Passed";
} else {
    $malaga_remarks = "Failed";
}

if ($malaga_average >= 90 && $malaga_average <= 100) {
    $malaga_letter_grade = "A";
} elseif ($malaga_average >= 80) {
    $malaga_letter_grade = "B";
} elseif ($malaga_average >= 70) {
    $malaga_letter_grade = "C";
} elseif ($malaga_average >= 60) {
    $malaga_letter_grade = "D";
} else {
    $malaga_letter_grade = "F";
}

echo "<h2>Activity 3: Grade Evaluator</h2>";
echo "<strong>Subject 1:</strong> " . $malaga_subject1 . "<br>";
echo "<strong>Subject 2:</strong> " . $malaga_subject2 . "<br>";
echo "<strong>Subject 3:</strong> " . $malaga_subject3 . "<br>";
echo "<strong>Subject 4:</strong> " . $malaga_subject4 . "<br>";
echo "<strong>Subject 5:</strong> " . $malaga_subject5 . "<br>";
echo "<hr>";
echo "<strong>Average Grade:</strong> " . number_format($malaga_average, 2) . "<br>";
echo "<strong>Remarks:</strong> " . $malaga_remarks . "<br>";
echo "<strong>Letter Grade:</strong> " . $malaga_letter_grade . "<br>";

?>