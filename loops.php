<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

//Here is an array :
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
/*Using foreach, build a loop that displays each element of the array
Then, modify your loop so as to conjugate the verb "to code" in the present tense.
Use a <br> to go to the next line.
*/
foreach ($pronouns as $pronoun) {
    if ($pronoun == 'He/She') {
        echo $pronoun . ' ' . 'codes' . '<br>';
    } else echo $pronoun . ' ' . 'code' . '<br>';
}
echo "<br><br>";

//-Write a script that prints the numbers from 1 to 120 using  while 

$i = 0;
echo 'While loop <br>';
while ($i <= 120) {
    echo $i . '<br>';
    $i++;
}

//-Write a script that prints the numbers from 1 to 120 using  for 

$i = 0;
echo 'For loop <br>';
for ($i = 0; $i <= 120; $i++) {
    echo $i . '<br>';
}

/*-Create an array containing the firstname of everyone in your startup.
Display each firstname using a loop.*/

$startup = array('Arno', 'Aurélien', 'Aurore', 'Benjamin', 'Céline', 'Corentin', 'Dominique', 'Edouard', 
'Hugo', 'Jonathan (B)', 'Jonathan (M)', 'Laura', 'Lysie', 'Marnie', 'Mathilde', 'Milo', 'Nathalie (G)', 
'Nathalie (V)', 'Nour', 'Pierre', 'Quentin', 'Virginie');
echo "Keller5 <br>";
foreach ($startup as $name) {
    echo $name . '<br>';
};

/*-Create an array containing at least 10 countries.
Then, generate the html that will render a select box inside an html form.
Of course, a loop will be useful...*/

/*function countryOptions() { 
    $countries = array('Belgium', 'France', 'Germany', 'Greece', 'Italy', 'Luxembourg', 'Netherlands', 
'Portugal', 'Spain', 'Switzerland');
    foreach ($countries as $country) {
    echo '<option value="' . $country . '">' . $country . '</option>';
}};

$countryOptions = countryOptions();

$selectCountries = '<form>' . '<select name="">' . '<option value="">Choose a country</option>' .
'</select>' . '</form>';

echo $selectCountries;*/

$countries = array('Belgium', 'France', 'Germany', 'Greece', 'Italy', 'Luxembourg', 'Netherlands', 
'Portugal', 'Spain', 'Switzerland');

echo "<form><select name=''><option value=''>Choose a country</option>";
foreach ($countries as $country) {
    echo '<option value="' . $country . '">' . $country . '</option>';
};
echo "</select></form>";


/*-Now, edit your array so that it becomes an associative array:
use the country ISO code as array key, and the country name as value.
-Now, adapt your html select box so that the country ISO code becomes the <option> element value, 
and the country name be the visible part of the <option>.*/

$countriesWithKeys = array(
    'BEL' => 'Belgium',
    'FRA' => 'France',
    'DEU' => 'Germany',
    'GRC' => 'Greece',
    'ITA' => 'Italy',
    'LUX' => 'Luxembourg',
    'NLD' => 'Netherlands',
    'PRT' => 'Portugal',
    'ESP' => 'Spain',
    'CHE' => 'Switzerland'
);
echo "<form><select name=''><option value=''>Choose a country</option>";
foreach ($countries as $key => $value) {
    echo '<option value="' . $key . '">' . $value . '</option>';
};
echo "</select></form>";

?>

</body>
</html>
