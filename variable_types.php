<html>
  <head><title>Hi!</title></head>
  <body>
  	<?php $name = 'c'; ?>
    <p>Hi! My name is <?php echo $name; ?></p>
    <?php $age = '(x)'; ?>
    <p>I am <?php echo $age; ?> years old.</p>
    <?php $eyes = '(a color)'; ?>
    <p>My eyes are <?php echo $eyes; ?>.</p>
    <?php $family = array(
        0 => '(family member 1)',
        1 => '(family member 2)',
        2 => '(family member 3)'); 
        /*And finally :
        what type of variable would you use to store the information whether you are hungry or not ?
        boolean*/
        ?>
    <p>The first person in my family is <?php echo $family[0]; ?>.</p>
  </body>
</html>