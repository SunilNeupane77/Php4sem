// Create a multidimensional array that represents a list of 3 students, where each student
has a name and an array of 3 subjects with marks. Display each student&#39;s name and their
corresponding marks using nested loops. Also find the highest mark in a
multidimensional array of student marks.
<?php
// Create a multidimensional array for students, with names and their marks for 3 subjects
$students = [
    "Ram" => [
        "Math" => 85,
        "English" => 78,
        "Science" => 92
    ],
    "Sita" => [
        "Math" => 90,
        "English" => 88,
        "Science" => 84
    ],
    "Hari" => [
        "Math" => 80,
        "English" => 75,
        "Science" => 88
    ]
];

// Display each student's name and their corresponding marks using nested loops
echo "Student Marks:<br>";
foreach ($students as $name => $subjects) {
    echo "$name's Marks:<br>";
    foreach ($subjects as $subject => $mark) {
        echo "$subject: $mark<br>";
    }
    echo "<br>";
}

// Find the highest mark in the multidimensional array of student marks
$highestMark = 0;
$highestMarkStudent = "";

foreach ($students as $name => $subjects) {
    foreach ($subjects as $subject => $mark) {
        if ($mark > $highestMark) {
            $highestMark = $mark;
            $highestMarkStudent = $name;
        }
    }
}

// Display the highest mark and the student who achieved it
echo "Highest Mark: $highestMark<br>";
echo "Student with Highest Mark: $highestMarkStudent<br>";
?>
