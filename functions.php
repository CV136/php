<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP exercises</title>
</head>
<body>
    

<?php

/*Function calls during "Runtime" :
function say_hello($firstname){
	echo "<p>Hello $firstname!</p>";
	echo '<hr>';
}
say_hello("Maurice")
say_hello("Alice");
say_hello("Jésus");
say_hello("Judas");
Just for the fun of it, we can make that code even more elegant by using an array, a loop and the function.
Do you see how ?
*/

$nameList = array("Maurice", "Alice", "Jésus", "Judas");
foreach ($nameList as $name) {
    echo "<p>Hello $name!</p>";
	echo '<hr>';
    };



//The words need to stay the same. The letters inside the words are shuffled.

$text = array("According", "to", "a", "researcher", "at", "Cambridge", ",", "University", 
"it", "doesn't", "matter", "in", "what", "order", "the", "letters", "in", "a", "word", "are", ",",
"the", "only", "important", "thing", "is", "that", "the", "first", "and", "last", "letter", 
"be", "at", "the", "right", "place", ".", "The", "rest", "can", "be", "a", "total", "mess", 
"and", "you", "can", "still", "read", "it", "without", "problem", ".", "This", "is", 
"because", "the", "human", "mind", "does", "not", "read", "every", "letter", "by", "itself", 
"but", "the", "word", "as", "a", "whole", "."); //inefficient, explode() exists

/*should be:
$text = "According to a researcher at Cambridge University,
it doesn't matter in what order the letters in a word are,
the only important thing is that the first and last letter be at the right place.
The rest can be a total mess and you can still read it without problem.
This is because the human mind does not read every letter by itself but the word as a whole."
-> foreach (explode(" ", $text) as $word)
*/

foreach ($text as $word) {
        echo str_shuffle($word) . " ";
    };
echo "<br><br>";



//Use a function that capitalizes the first letter of the provided argument.
$emile = "emile"; //apparently the 'é' causes problems? /*shakes fist* anglophones!
function maj($aword) {
    echo ucfirst($aword);
};
maj($emile);
echo "<br><br>";



//Use the native function allowing you to display the current year.
$currentYear = date("Y");

//Now display the date, time, minutes and seconds, using the same function, by playing with the arguments.
$theDate = date("d/m/Y, H:i:s");
echo $theDate;
echo "<br><br>";



//Create a "Sum" function that takes 2 numbers and returns their sum.
function Sum($num1, $num2){
    $sum = $num1 + $num2;
    return $sum;
};

/*Improve that function so that it checks whether the argument is indeed a Number.
If not, it should display : "Error: the argument is not a number."*/
function numSum($num1, $num2) {
    if (is_numeric($num1) AND is_numeric($num2)) {
        $sum = $num1 + $num2;
        return $sum;
    } else { echo "Error: the argument is not a number.";}
};

echo numSum(4, 5);
echo "<br>";
echo numSum("x", 2);
echo "<br><br>";



/*Create a function that takes as argument a string of characters
and returns an acronym made of the initials of each word.
Example: "In code we trust!" should return: ICWT).*/

$str = "In code we trust!";
function acronym($string) {
    $stringArray = explode(" ", $string);
    foreach ($stringArray as $words) {
        echo (strtoupper(substr($words, 0, 1)));
    };
};
acronym($str);
echo "<br>";

//just for kicks
$suMoPostGame = "Pôle Liéaux Opérations Ultra chimères";
acronym($suMoPostGame);
echo "<br><br>";



/*Create a function that replaces the letters "a" and "e" with "æ".
Example: "caecotrophie", "chaenichthys","microsphaera", "sphaerotheca" should respectively return
"cæcotrophie", "chænichthys","microsphæra", "sphærotheca".*/
function replace($word){
    echo strtr($word, "ae", "æ");
};
$scienceWords = array("caecotrophie", "chaenichthys","microsphaera", "sphaerotheca");
foreach ($scienceWords as $scienceWord) {
    echo replace($scienceWord) . " ";
};
//^ some letters don't display properly, but normal characters, not the ones affected by the function?
echo "<br>";

/*Create the opposite function, which replaces "æ" by "ae" in :
cæcotrophie, chænichthys, microsphæra, sphærotheca*/
function unreplace($word2){
    echo strtr($word2, "æ", "ae");
};
$moreScienceWords = array("cæcotrophie", "chaenichthys", "microsphæra", "sphærotheca");
foreach ($moreScienceWords as $oneMoreScienceWord) {
    echo unreplace($oneMoreScienceWord) . " ";
};
//no display problem (?)
echo "<br><br>";



/*Create a function to return "notice", "warning" and "error" messages to a user, which takes 2 arguments : 
the "message", and the "css class" (values: "info", "error", "warning").
This function would allow us to write this :
echo feedback("Incorrect email address", "error");
which will produce this html :
<div class="error">Error: Incorrect email address.</div>
Improve that function by giving the default class the value of "info".
Look into the documentation php.*/
function feedback($message, $class){
    $classInText = ucfirst($class);
    echo '<div class="'.$class.'">'.$classInText.': '.$message.'.</div>';
};
feedback("Incorrect email address", "error"); 
//doesn't address the values thing
//(but if the goal is to just write in the value name anyway, what are they for...?)

echo "<br><br>";



/*Create a random words generator, outputing 2 words:
one which length is between 1 to 5 letters, the other between 7 and 15 letters.
The screen will display a title "Generate a new word", and then the two generated words,
and underneath, a bouton with the text "Generate").*/
echo "Generate a new word";
echo "<br>";
//echo word 1 & 2
echo "<input type='submit' value='Generate'>";

echo "<br><br>";



//De-capitalize the string : "STOP YELLING I CAN'T HEAR MYSELF THINKING!!"
$capitalString = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";
echo ucfirst(strtolower($capitalString));


/*In your new job, you have to maintain the code of a former developer.
Make it DRY by creating a custom function calculate_cone_volume :
// Volume of a cone which ray is 5 and height is 2 
$volume = 5 * 5 * 3.14 * 2 * (1/3);  
echo 'The volume of a cone which ray is 5 and height is 2 = ' . $volume . ' cm<sup>3</sup><br />';  
// Volume of a cone which ray is 3 and height is 4  
$volume = 3 * 3 * 3.14 * 4 * (1/3);  
echo 'The volume of a cone which ray is 3 and height is 4 = ' . $volume . ' cm<sup>3</sup><br />'; */
function volume($ray, $height){
    $volume = $ray * $ray * 3.14 * $height * (1/3);
    echo 'The volume of a cone which ray is' . $ray . 'and height is' . $height . '= ' . $volume . ' cm<sup>3</sup><br />';
};


?>

</body>
</html>








