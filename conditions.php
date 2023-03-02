<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions</title>
</head>
<body>

<?php

//Series of exercises on PHP conditional structures.

$temperature = 12;

if( $temperature >= 15 ) {
    // code to execute if the condition results TRUE
    $clothes = "T-shirt";
    $should_i_wear_a_scarf = false;
  } else {
    // code to execute if the condition results FALSE
    $clothes = "Pull-over";
    $should_i_wear_a_scarf = true;
  }
  
  /*if ($should_i_wear_a_scarf == true){
      // that function is only executed in the condition is true
      grab_scarf_from_door_hanger();
  }*/
  // The following function will be executed everytime, 
  // but its $clothes argument changes according to the result
  // of our previous conditional structure
 /*cover_my_chest_with($clothes);*/

 echo "1.1 Clean your room Exercise";
 echo "<br><br>";
 
 /*
   $room_is_filthy = true; 
 
 if ($room_is_filthy == true){
   echo "Yuck, Room is dirty : let's clean it up !";
   //cleanup_room();
   echo "<br>Room is now clean!";
   
     $room_is_filthy = false;
 } else { 
   echo "<br>Nothing to do, room is neat.";
      }
 */
 
 
 //1.2 Improved
 
 //$possible_states = array( 'health hasard', 'filthy', 'dirty', 'clean','immaculate' );
 $possible_states = [ 'health hasard', 'filthy', 'dirty', 'clean','immaculate' ];
 
 $room_filthiness = $possible_states[3];
 //() ? [] ? adding one of these causes an error, not adding it causes undefined
 
  if( $room_filthiness == $possible_states[0] ){
      echo "Yuck, Room is Disgusting! Let's clean it up !";
  } else if( $room_filthiness == $possible_states[1] ){
      echo "Yuck, Room is filthy : let's clean it up !";
  } else if( $room_filthiness == $possible_states[2] ){
      echo "Yuck, Room is dirty : let's clean it up !";
  } else if( $room_filthiness == $possible_states[4] ){
      echo "So clean it sparkles.";
  } else {
      echo "Nothing to do, room is neat.";
  }
 
  echo "<br><br>";
 
 //echo "<br>"
 
 echo "2. Display a different greeting message depending on the time of the day.";
 echo "<br><br>";
 
 /*$now = ; // How to get the current time in PHP ? Google is your friend ;-)
 (like this, apparently : date('d-m-y H:i:s') )*/
 
 //$now = date('H:i'); and this is how to use just a specific part of the date?
 //default to UST, though, while "date('d-m-y H:i:s')" doesn't ->
 
 date_default_timezone_set('Europe/Paris'); //<-doesn't seem to work, echo still follows UST
 $now = date('H:i');
 
 //echo $now;
 
 if ($now >= "05h00" && $now <= "09h00"){
     echo 'Good morning!';
 } else if ($now >= "09h01" AND $now <= "12h00"){
     echo 'Good day!';
 } else if ($now >= "12h01" AND $now <= "16h00"){
     echo 'Good afternoon!';
 } else if ($now >= "16h01" AND $now <= "21h00"){
     echo 'Good evening!';
 } else if ($now >= "21h01" OR $now <= "04h59"){
     echo 'Good night!';
 }
 
 echo "<br><br>";
 
 
 echo "3. Display a different greeting according to the user's age.";
 echo "<br><br>";
 
 ?>
 
 <form method="get" action="">
     <label for="age">Age:</label>
     <input type="number" name="age">
     <br>
     <input type="submit" name="submit" value="Greet me">
 </form>
 
 <?php
 if (isset($_GET['age'])) {
     if ($_GET['age'] < 12) {
         echo "Hello kiddo!";
     } else if ($_GET['age'] <= 18) {
         echo "Hello Teenager !";
     } else if ($_GET['age'] >= 115) {
         echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
     } else {
         echo "Hello Adult !";
     }
 }
 
 echo "<br><br>";
 
 echo "4. Display a different greeting according to the user's age and gender.";
 echo "<br><br>";
 
 ?>
 
 <form method="get" action="">
     <label for="age">Age:</label>
     <input type="number" name="age">
     <br>
     <label for="gender">Gender:</label>
     <br>
     <input type="radio" name="gender" value="M">
     <label for="M">M</label>
     <input type="radio" name="gender" value="F">
     <label for="F">F</label>
     <input type="radio" name="gender" value="X">
     <label for="X">X</label>
     <br>
     <input type="submit" name="submit" value="Greet me">
 </form>
 
 <?php
 if (isset($_GET['age']) AND isset($_GET['gender'])) {
     if ($_GET['age'] < 12 AND $_GET['gender'] == "X") {
         echo "Hello kiddo!";
     } else if ($_GET['age'] < 12 AND $_GET['gender'] == "M") {
         echo "Hello little guy!";
     } else if ($_GET['age'] < 12 AND $_GET['gender'] == "F") {
         echo "Hello little Miss!";
     } else if ($_GET['age'] <= 18 AND $_GET['gender'] == "M") {
         echo "Hello Young Man!";
     } else if ($_GET['age'] <= 18 AND $_GET['gender'] == "F") {
         echo "Hello Young Lady!";
     } else if ($_GET['age'] <= 18 AND $_GET['gender'] == "X") {
         echo "Hello Youngster!";
     } else if ($_GET['age'] < 115 AND $_GET['gender'] == "X") {
         echo "Hello friend!";
     } else if ($_GET['age'] < 115 AND $_GET['gender'] == "M") {
         echo "Hello sir!";
     } else if ($_GET['age'] < 115 AND $_GET['gender'] == "F") {
         echo "Hello ma'am!";
     } else if ($_GET['age'] >= 115) {
         echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
     }
 }
 
 echo "<br><br>";
 
 echo "5. Display a different greeting according to the user's age, gender and mothertongue.";
 echo "<br><br>";
 
 ?>
 
 <form method="get" action="">
     <label for="age">Age:</label>
     <input type="number" name="age">
     <br>
     <label for="gender">Gender:</label>
     <br>
     <input type="radio" name="gender" value="M">
     <label for="M">M</label>
     <input type="radio" name="gender" value="F">
     <label for="F">F</label>
     <input type="radio" name="gender" value="X">
     <label for="X">X</label>
     <br>
     <label for="english">Do you speak English?</label>
     <br>
     <input type="radio" name="english" value="Yes">
     <label for="Yes">Yes</label>
     <input type="radio" name="english" value="No">
     <label for="No">No</label>
     <br>
     <input type="submit" name="submit" value="Greet me">
 </form>
 
 <?php
 if (isset($_GET['age']) AND isset($_GET['gender']) AND isset($_GET['english'])) {
     if ($_GET['age'] < 12 AND $_GET['gender'] == "X" AND $_GET['english'] == "Yes") {
         echo "Hello kiddo!";
     } else if ($_GET['age'] < 12 AND $_GET['gender'] == "X" AND $_GET['english'] == "No") {
         echo "Aloha kiddo!";
     } else if ($_GET['age'] < 12 AND $_GET['gender'] == "M" AND $_GET['english'] == "Yes") {
         echo "Hello little guy!";
     } else if ($_GET['age'] < 12 AND $_GET['gender'] == "M" AND $_GET['english'] == "No") {
         echo "Aloha little guy!";
     } else if ($_GET['age'] < 12 AND $_GET['gender'] == "F" AND $_GET['english'] == "Yes") {
         echo "Hello little Miss!";
     } else if ($_GET['age'] < 12 AND $_GET['gender'] == "F" AND $_GET['english'] == "No") {
         echo "Aloha little Miss!";
     } else if ($_GET['age'] <= 18 AND $_GET['gender'] == "M" AND $_GET['english'] == "Yes") {
         echo "Hello Young Man!";
     } else if ($_GET['age'] <= 18 AND $_GET['gender'] == "M" AND $_GET['english'] == "No") {
         echo "Aloha Young Man!";
     } else if ($_GET['age'] <= 18 AND $_GET['gender'] == "F" AND $_GET['english'] == "Yes") {
         echo "Hello Young Lady!";
     } else if ($_GET['age'] <= 18 AND $_GET['gender'] == "F" AND $_GET['english'] == "No") {
         echo "Aloha Young Lady!";
     } else if ($_GET['age'] <= 18 AND $_GET['gender'] == "X" AND $_GET['english'] == "Yes") {
         echo "Hello Youngster!";
     } else if ($_GET['age'] <= 18 AND $_GET['gender'] == "X" AND $_GET['english'] == "No") {
         echo "Aloha Youngster!";
     } else if ($_GET['age'] < 115 AND $_GET['gender'] == "X" AND $_GET['english'] == "Yes") {
         echo "Hello friend!";
     } else if ($_GET['age'] < 115 AND $_GET['gender'] == "X" AND $_GET['english'] == "No") {
         echo "Aloha friend!";
     } else if ($_GET['age'] < 115 AND $_GET['gender'] == "M" AND $_GET['english'] == "Yes") {
         echo "Hello sir!";
     } else if ($_GET['age'] < 115 AND $_GET['gender'] == "M" AND $_GET['english'] == "No") {
         echo "Aloha sir!";
     } else if ($_GET['age'] < 115 AND $_GET['gender'] == "F" AND $_GET['english'] == "Yes") {
         echo "Hello ma'am!";
     } else if ($_GET['age'] < 115 AND $_GET['gender'] == "F" AND $_GET['english'] == "No") {
         echo "Aloha ma'am!";
     } else if ($_GET['age'] >= 115) {
         echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
     }
 }
 
 echo "<br><br>";
 
 echo "6. The Girl Soccer team";
 echo "<br><br>";
 
 ?>
 
 <form method="get" action="">
     <label for="name">Name:</label>
     <input type="text" name="name">
     <br>
     <label for="age">Age:</label>
     <input type="number" name="age">
     <br>
     <label for="gender">Gender:</label>
     <br>
     <input type="radio" name="gender" value="M">
     <label for="M">M</label>
     <input type="radio" name="gender" value="F">
     <label for="F">F</label>
     <br>
     <input type="submit" name="submit">
 </form>
 
 <?php
 /*if (isset($_GET['age']) AND isset($_GET['gender'])) {
     if ($_GET['age'] >= 21 AND $_GET['age'] <= 40 AND $_GET['gender'] == "F") {
         echo "Welcome to the team!";
     } else {
         echo "Sorry, you don't fit the criteria";
     }
 }
 
 echo "<br><br>";
 
 // 7. Achieve the same, without the ELSE.
 
 ?>
 
 <form method="get" action="">
     <label for="name">Name:</label>
     <input type="text" name="name">
     <br>
     <label for="age">Age:</label>
     <input type="number" name="age">
     <br>
     <label for="gender">Gender:</label>
     <br>
     <input type="radio" name="gender" value="M">
     <label for="M">M</label>
     <input type="radio" name="gender" value="F">
     <label for="F">F</label>
     <br>
     <input type="submit" name="submit">
 </form>
 
 <?php
 */
 if (isset($_GET['age']) AND isset($_GET['gender'])) {
     $answer = "Sorry, you don't fit the criteria";
     if ($_GET['age'] >= 21 AND $_GET['age'] <= 40 AND $_GET['gender'] == "F") {
         $answer = "Welcome to the team!";
     }
     echo $answer;
 }
 
 echo "<br><br>";
 
 echo "8. 'School sucks!'' Exercise";
 
 echo "<br><br>";
 
 ?>
 
 <form method="get" action="">
     <label for="note">Note:</label>
     <input type="number" name="note">
     <br>
     <input type="submit" name="submit">
 </form>
 
 <?php
 if (isset($_GET['note'])) {
     if ($_GET['note'] <= 4) {
         echo "This work is really bad. What a dumb kid!";
     } else if ($_GET['note'] <= 9) {
         echo "This is not sufficient. More studying is required.";
     } else if ($_GET['note'] == 10) {
         echo "Barely enough!";
     } else if ($_GET['note'] <= 14) {
         echo "Not bad!";
     } else if ($_GET['note'] <= 18) {
         echo "Bravo, bravissimo!";
     } else if ($_GET['note'] > 18) {
         echo "Too good to be true : confront the cheater!";
     }
 }
 
 echo "<br><br>";
 
 /*echo "9. The 'Switch' structure.";
 echo "<br><br>";
 
 $note = $_GET['note'];
 
 switch ($note) {
     case 0:
     echo "This work is really bad. What a dumb kid!";
     break;
     case 1:
         echo "This work is really bad. What a dumb kid!";
         break;
     case 2:
         echo "This work is really bad. What a dumb kid!";
         break;
     case 3:
         echo "This work is really bad. What a dumb kid!";
         break;
     case 4:
         echo "This work is really bad. What a dumb kid!";
         break;
     case 5:
         echo "This is not sufficient. More studying is required.";
         break;
     case 6:
         echo "This is not sufficient. More studying is required.";
         break;
     case 7:
         echo "This is not sufficient. More studying is required.";
         break;
     case 8:
         echo "This is not sufficient. More studying is required.";
         break;
     case 9:
         echo "This is not sufficient. More studying is required.";
         break;
     case 10:
         echo "Barely enough!";
         break;
     case 11:
         echo "Not bad!";
         break;
     case 12:
         echo "Not bad!";
         break;
     case 13:
         echo "Not bad!";
         break;
     case 14:
         echo "Not bad!";
         break;
     case 15:
         echo "Bravo, bravissimo!";
         break;
     case 16:
         echo "Bravo, bravissimo!";
         break;
     case 17:
         echo "Bravo, bravissimo!";
         break;
     case 18:
         echo "Bravo, bravissimo!";
         break;
     case 19:
         echo "Too good to be true : confront the cheater!";
         break;
     case 19:
         echo "Too good to be true : confront the cheater!";
         break;
 };
 
 // Yeah no that was *not* easier to read, I must have misunderstood the instructions?
 */
 
 ?>
 
 </body>
 </html>
 