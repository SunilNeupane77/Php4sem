// Write a script that takes a sentence as input, splits it into words, and stores the words in
an array. Sort the array in alphabetical order and display the sorted words as a string.
<?php

function sortSentence($sentence) {
  // 1. Split the sentence into an array of words
  $words = explode(" ", $sentence);

  // 2. Sort the array of words alphabetically
  sort($words);

  // 3. Join the sorted words back into a string
  $sortedSentence = implode(" ", $words);

  return $sortedSentence;
}

// Example usage:
$inputSentence = "This is an example sentence";
$sortedSentence = sortSentence($inputSentence);

echo "Original Sentence: " . $inputSentence . "<br>";
echo "Sorted Sentence: " . $sortedSentence;

?>