<?php
    
    include 'silverjack.php';
    
    // echo "This is Jason's part";
    

    function drawcards($cardArray, &$playerScoreArray)
    {
        $scores = array('');
        foreach ($playerScoreArray as $name => $score) //go through all players
        {
            while($score < 42) //check if the current player's score is not already above 42
            {
                $key = array_rand($cardArray); //pick a random card
                if($score + $cardArray[$key] < 42) //check if this random card's score would make the player's score higher than 42
                { //if no then continue
                    echo "<img src= \"" . $key . "\" /> "; //print card
                    $score = $score +  $cardArray[$key]; //update score
                    unset($cardArray[$key]); //remove card from the array
                }
                else //if yes, end current player
                    break;
            }
            echo $score; //current player's total score
            array_push($scores, $score); //array of scores
            echo "</br>";
        }
        
        displaywinner($scores); //call second function

    }

    
    function displaywinner($playerScoreArray)
    {
        //find max in array of scores
        echo "And the winner is......";
        $max = 0;
        $winner = '';
        foreach ($playerScoreArray as $name => $score) //go through all players
           if($score > $max){
                $winner = $name;
                $max = $score; //update max
           }
        echo "player " . $winner . " with " . $max . " points!";
    }
    
    //function displays player images
    function displayplayer($playerImageArray)
    {
        $random_keys=array_rand($playerImageArray,4);
        echo "<img src= \"" . $playerImageArray[$random_keys[0]] . "\" /><br>";
        echo "<img src= \"" . $playerImageArray[$random_keys[1]] . "\" /><br>";
        echo "<img src= \"" . $playerImageArray[$random_keys[2]] . "\" /><br>";
        echo "<img src= \"" . $playerImageArray[$random_keys[3]] . "\" />";
    }
    drawcards($cardArray, $playerScoreArray); //call first function
    displayplayer($playerImageArray); //call displayplayer function
?>