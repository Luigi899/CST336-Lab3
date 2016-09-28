<?php
    function randomGenerator(){
        $randomNum = rand(1, 13);
        return $randomNum;
    }
    function randomSuit(){
        $randSuit = rand(1, 4);
        $suit = "";
        switch($randSuit){
            case 1: $suit = "hearts";
            break;
            case 2: $suit = "clubs";
            break;
            case 3: $suit = "diamonds";
            break;
            case 4: $suit = "spades";
            break;
        }
        return $suit;
    }
    function randomArray(){
        $rand_array = array();
        
        for($i = 0; $i < 5;){
            $newRand = randomGenerator();
            
            if(!in_array($newRand, $rand_array))
                {
                $rand_array[$i] = $newRand;
                $i++;
            }
        }
        
        return $rand_array;
    }
    function getSum($rand_array){
        $sum = array_sum($rand_array);
        
        return $sum;
    }
    function findGreater($sum1, $sum2, $sum3, $sum4){
        $results_array = array();
        array_push($results_array, abs(42 - $sum1), abs(42 - $sum2), abs(42 - $sum3), abs(42 - $sum4));
        $minValue = min($results_array);
        $minIndex = 0;
        for($i = 0; $i < 4; $i++){
            if($results_array[$i] == $minValue)
                $minIndex = $i;
        }
        
        if(duplicateCheck($sum1, $sum2, $sum3, $sum4) == true){
            $minIndex = -1;
        }
        
        
        return $minIndex;
    }
    function duplicateCheck($sum1, $sum2, $sum3, $sum4){
        $results_array = array();
        array_push($results_array, $sum1, $sum2, $sum3, $sum4);
        for($i = 0; $i < 4; $i++){
            for($j = $i + 1; $j < 5; $j++)
                if($results_array[$i] == $results_array[$j])
                {
                return true;
            }
        }
        
        return false;
    }
    function printWinner($minIndex){
        $winner = "";
        switch($minIndex)
            {
            case -1: $winner = "Tie!";
            break;
            case 0: $winner = "Jack Wins! $total";
            break;
            case 1: $winner = "Alex Wins! $total";
            break;
            case 2: $winner = "Luigi Wins! $total";
            break;
            case 3: $winner = "Player 4 Wins! $total";
            break;
           
        }
        
        return $winner;
    }
    
?>