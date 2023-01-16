<html>
<head>
<title>Conditions (array)</title>
</head>
<body>
  <?php
    //$possible_states = array( 'health hasard', 'filthy', 'dirty', 'clean','immaculate' );
    $possible_states = [ 'health hasard', 'filthy', 'dirty', 'clean','immaculate' ];

   $room_filthiness = $possible_states[2];
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
        echo "<br>Nothing to do, room is neat.";
    }
?>
</body>
</html>