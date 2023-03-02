<?php

//2. Create an array representing your family members
//3. Display its content using the print_r function
 $family = array('mother', 'father', 'daughter', 'son');
 print_r($family);
 echo "<br><br>";

//4. Then, create an array describing your favourite recipes
//5. Display its content using the print_r

$recipes = array();
$recipes[0] = "recette 1";
$recipes[1] = "recette 2";
$recipes[2] = "recette 3";
print_r($recipes);
echo "<br><br>";

//6. Then, create an array listing your favourite films
//7. Then, using that array, display only the one film you like best using its index

$movies = array();
$movies[0] = "movie P20";
$movies[1] = "movie C23";
$movies[2] = "movie C25";
echo $movies[1];
echo "<br><br>";

//Associative arrays
//Describe yourself using an associative array: $me.
//Specify your age, your favourite season of the year, whether you like soccer or not (boolean).
//Try to use the right variable type for each value.

$me = array (
    'age' => 31,
    'favorite_season' => 'spring',
    'likes_soccer' => false, //doesn't display, is that normal (probably not)
);
print_r($me);
echo "<br><br>";

//what's <pre>?

//Multidimensional arrays
//
$me = array (
    'age' => 31,
    'favorite_season' => 'spring',
    'likes_soccer' => false,
    'favourite_movies' => array('I choose you', 'Fist of Blue Sapphire', 'Quarter of silence')
);
print_r($me);
echo "<br><br>";

//1. Add your hobbies using an array to your $me array
$me['hobbies'] = array("", "", "");


/*2. Then, after the $me array, create a second array with the same keys as yours,
to describe your mother : the $mother array (make it someone else if you prefer).
3. Make sure to also describe her hobbies*/
$mother = array (
    'age' => 57,
    'favorite_season' => 'summer?',
    'likes_soccer' => false,
    'favourite_movies' => array("?", "??", "???"),
    'hobbies' => array("gardening", "reading", "series?")
);

//4. Then, below that, assign the $mother array to a new key in your $me array : let's call that key 'mother'.
$me['mother'] = $mother;

/*5. Now, below that, check the content of $me using print_r().
(wrap it inside a <pre> html tag to make it more legible ).
It should show a multi-dimensional array, where the mother array are values of your mother key.*/
echo '<pre>';
print_r($me);
echo '</pre>';

/*Count the number of elements
Say you want to know how many hobbies your mother has.
Try to guess the native php function that allows you to count the number of elements in an array.
Below, count your own hobbies
Below, add both totals and display the total amount of hobbies.
*/
echo count($mother['hobbies']);
echo count($me['hobbies']);
echo count($me['hobbies']) + count($mother['hobbies']);

