<?php
    include_once 'WebProject2.html';
    require_once 'PHPTest.php';
   
   $query = "SELECT * FROM  arctic_animals";
   $result = mysqli_query($connection, $query);
   
   while($row = mysqli_fetch_assoc($result)) {
       echo $row['Name'] . "s are " . $row['color'] . " with an average height of " . $row['avg_height'] . " and an average weight of " . $row['avg_weight'] . "<br>";
   }
   
?>