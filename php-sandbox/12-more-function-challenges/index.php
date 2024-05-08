<?php
/*
  Challenge 1: Fahrenheit to Celsius
  Create a function called `fahrenheitToCelsius` that takes a Fahrenheit temperature as an argument. Return the temperature converted to Celsius.

  The formula to convert Fahrenheit to Celsius is: Celsius = (Fahrenheit - 32) * 5/9
*/

echo ("fahrenheitToCelsius");
echo '<br>';

$fahrenheit = 68;
$baseTemp = 32;

$fahrenheitToCelsius = fn ($fahrenheit, $baseTemp) => ($fahrenheit - $baseTemp) * (5/9);

$celsius = $fahrenheitToCelsius($fahrenheit, $baseTemp);

echo "$fahrenheit F = $celsius C";

echo '<br>';

/*
  Challenge 2: Print names in uppercase
  Create a function called `printNamesToUpperCase` that takes an array of names as an argument. The function should loop through the array and print each name to the screen in uppercase letters.
*/


echo '<br>';

echo 'printNamesToUpperCase';

$names = ['Jojo', 'Jack', 'John', 'Juan', 'Jay', 'Joshua', 'Jacob'];

function printNamesToUpperCase ($names) {
  foreach($names as $name){
    echo ('<br>' . strtoupper($name) );
  }
}

printNamesToUpperCase($names);



/*
  Challenge 3: Find the longest word
  1. Create a function called `findLongestWord` that takes a sentence as an argument.
  2. The function should return the longest word in the sentence.
  3. The output should look like this:
*/

echo '<br>';
echo 'findLongestword';
echo '<br>';

$sentence = 'The quickest brown fox jumped over the lazy dog';

function findLongestWord($sentence) {
  $wordsArray = explode(' ', $sentence);
  $longestWord = '';
  foreach($wordsArray as $word) {
    if (strlen($word) > strlen($longestWord)) {
      $longestWord = $word;
      // echo ("<br>" . "Word: " . $word . " Longest: " . $longestWord);
    }
  }
  return $longestWord;
};

$sample = findLongestWord($sentence);

echo $sample;
