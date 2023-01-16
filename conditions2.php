<?php
/*$now = ; // How to get the current time in PHP ? Google is your friend ;-)
(like this, apparently : date('d-m-y H:i:s') )*/

//$now = date('H:i'); and this is how to use just a specific part of the date?
//default to UST, though, while "date('d-m-y H:i:s')" doesn't ->

date_default_timezone_set('Europe/Paris');
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
?>