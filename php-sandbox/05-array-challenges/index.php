<?php

/*
  Challenge 1: Sum of an array
  
  1. Create an array of numbers 
  2. Get the sum of all of the numbers combined and put into a variable.
  4. Get the amount of numbers in the array and put into a variable.
  5. Print out 'The sum of the {amount} numbers is: {sum} '. For example, if the array is [1, 2, 3, 4, 5], the output should be 'The sum of the 5 numbers is: 15'. 
*/

$numbers = [1, 2, 3, 4, 5];
$sum = array_sum($numbers);
$numCount = count($numbers);

echo '<h3>Sum Of An Array </h3>';

echo ('The sum of the ' . $numCount . " numbers is " . $sum . "." );

/*
  Challenge 2: Colors array

  1. Reverse the `$colors` array.
  2. Add 'purple' and 'orange' to the end of the array.
  3. Replace the second color with 'pink'
  4. Remove the last element of the array.

You should end up with the following array: ['yellow', 'pink', 'blue', 'red', 'purple']
*/

echo '<h3>Colors Array</h3>';

$colors = ['red', 'blue', 'green', 'yellow'];

// Reverse the colors array
$colors = array_reverse($colors);
// Add purple and orange
array_push($colors, 'purple', 'orange');
// Replace second color with pink
$colors[1] = 'pink';
// Remove last element of the array
array_pop($colors);

print_r($colors);
// var_dump($colors);

/*
  Challenge 3: Job listings array

  1. Create a multi-dimensional array of associative arrays of 3 job listings with the fields id, job_title, company, contact_email, and contact_phone. Also add an array field for skills. The skills array should be an array of strings with each skill a person has. For example, 'PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', etc.
  2. Create a new listing using the `array_push()` function. The new listing should have the same fields as the others.
  3. Print out the job_title of the second job listing in the array.
  4. Print out the first skill of the third job listing in the array.
*/



echo '<h3>Job Listings</h3>';

$jobListings = [
  ['id' => 1, 
  'job_title' => 'PHP Developer',
  'company' => 'Alfafusion', 
  'contact_email' => 'hello@af.com', 
  'contact_phone' => 1234556, 
  ['skills' => ['PHP', 'Laravel', 'MySQL']], 
],
  ['id' => 2, 
  'job_title' => 'Python Developer',
  'company' => 'Locad', 
  'contact_email' => 'hello@af.com', 
  'contact_phone' => 1234556, 
  'skills' => ['PHP', 'Laravel', 'MySQL'], 
  ]
  ];

array_push($jobListings, 
['id' => 3, 
'job_title' => 'Laravel Developer',
'company' => 'Cafe24', 
'contact_email' => 'hello@cafe24.com', 
'contact_phone' => 1234556, 
'skills' => ['PHP', 'Laravel', 'MySQL'], 
]);


echo "Array:<br>";
// var_dump($jobListings);
print_r($jobListings);
echo ('<br>');
echo ('<br>');


echo ('Print out the job_title of the second job listing in the array: ');
echo ('<br>');
echo ($jobListings[1]['job_title']);

echo ('<br>');
echo ('<br>');
echo ('Print out the first skill of the third job listing in the array: ');
echo ('<br>');
echo ($jobListings[2]['skills'][0]);


