<?php 
include 'silverjack.php';
include 'functions.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Monster Jack </title>
        <link href="https://fonts.googleapis.com/css?family=Creepster" rel="stylesheet">
        <style>
           @import url("CSS.css");
        </style>
    </head>
    <body>

<h1>MonsterJack</h1>
<div class ="cardTable">
<div class="players">
    <br>
<?php
displayplayers($players);
?>
</div>
<br>
<div class="hands">
<?php 
drawcards($cardArray, $playerScoreArray,$players);
?>    
</div>
</div>



    </body>
</html>