<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="">
        <label for="name">Name</label>
        <input type="text" name="name">
        <input type="radio" name="gender" value="M">
        <label for="M">M</label>
        <input type="radio" name="gender" value="F">
        <label for="F">F</label>
        <input type="radio" name="gender" value="X">
        <label for="X">X</label>
        <br>
        <label for="teacher">Teacher</label>
        <input type="radio" name="teachergender" value="Mr">
        <label for="M">Mr</label>
        <input type="radio" name="teachergender" value="Miss">
        <label for="F">Miss</label>
        <input type="radio" name="teachergender" value="Mrs">
        <label for="X">Mrs</label>
        <input type="radio" name="teachergender" value="Mx">
        <label for="M">Mx</label>
        <input type="text" name="teacher">
        <br>
        <label>Reason for absence</label>
        <input type="radio" name="excuse" value="illness">
        <label for="illness">Illness</label>
        <input type="radio" name="excuse" value="death">
        <label for="death">Death of a pet or other family member</label>
        <input type="radio" name="excuse" value="activity">
        <label for="activity">Significant extra-curricular activity</label>
        <input type="radio" name="excuse" value="otherreason">
        <label for="otherreason">Other</label>
        <br>
        <input type="submit" name="submit" value="Send">
    </form>

<?php

$illness = array("they caught a cold", "they have the flu", "they're sick", "they have COVID (please warn the other students)", "they're injured");
$death = array("of a death in the family", "their pet died", "their grandparent died", "a relative died", "someone they know died");
$activity = array("an extra-curricular activity that requires their presence is taking place", "they have aquaponey", "they're needed at their club", "they have to practice", "they're very busy");
$other = array("they're taking a mental health day", "they said school is just really, really boring, and tbh? I agree", "we're moving!", "they're the only one who can fullfill an essential role at home: giving the cat attention 24/7", "someone needs to watch their younger sibling and I can't afford a babysitter");

if (isset($_GET['name']) AND isset($_GET['gender']) AND isset($_GET['teachergender']) AND isset($_GET['teacher']) AND isset($_GET['excuse'])) {
    $childName = $_GET['name'];
    $childGender = $_GET['gender']; //how to adapt pronouns (IDK and it's not part of the exercise, leave for later)
    //...you'd need personal *and* possessive pronouns, not doing it now
    // $child3rdPerson = $_GET['gender']; //<- nope
    switch ($childGender) {
        case "M":
            $child3rdPerson = "he";
            break;
        case "F":
            $child3rdPerson = "she";
            break;
        case "X":
            $child3rdPerson = "they";
            break;
        default:
            $child3rdPerson = "they";
    }; //for pronouns but currently does nothing
    $madameTeacher = "{$_GET['teachergender']} {$_GET['teacher']}";
    $excuse =
    $reason = $_GET['excuse']; //does that work or...? (no, it should return 'illness', not $illness?)
    switch ($reason) {
        case "illness":
            $excuse = array_rand($illness);
            break;
        case "death":
            $excuse = array_rand($death);
            break;
        case "activity":
            $excuse = array_rand($activity);
            break;
        case "otherreason":
            $excuse = array_rand($other);
            break;
    }; //doesn't return the content of the array item
    //...that's because the function is for returning the key of the item, duh.
    //shuffle?
    $today = date("D/d/m/Y"); //...should that be included? what about excuses written for the next day? a date picker?

    $motdexcuse = "{$madameTeacher}, I'm sorry but {$childName} can't come to school this {$today}, because {$excuse}. Please forgive them.
    Cordially,";
    
    echo $motdexcuse;
}

?>




</body>
</html>

