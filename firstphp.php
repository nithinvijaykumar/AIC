<html>

<body>
<?php


$sports = ["Tennis", "Basketball", "Table Tennis", "Football", "Badminton"];
echo "<ul>";
for ($i = 0; $i < count($sports); $i++ ){
  echo "<li>".$sports[$i]."</li>";
}
echo "</ul>";

$movies = ["Avatar","Harry Potter and The Chamber of Secrets", "Jumanji", "Harry Potter and the Sorcerer's Stone", "Avengers: Endgame"];
echo "<ol>";
for ($i = 0; $i < count($movies); $i++ ){
  echo "<li>".$movies[$i]."</li>";
}
echo "</ol>";
$codingLanguages = ["Javascript", "Go", "Java", "PHP"];
echo "<ol>";
for ($i = 0; $i < count($codingLanguages); $i++ ){
  echo "<li>".$codingLanguages[$i]."</li>";
}
echo "</ol>";
