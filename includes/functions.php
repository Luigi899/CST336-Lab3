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
    function printwinner($sum1, $sum2, $sum3, $sum4,$players){
        $results_array = array();
        $check= array(0,0,0,0);
        $one = 0;
        $two = 0;
        $three = 0;
        $four =0;
        array_push($results_array, abs(42 - $sum1), abs(42 - $sum2), abs(42 - $sum3), abs(42 - $sum4));
        $winners = 0;
        $winner_sum =0;
        for($i = 0; $i < 4; $i++){
            if($winner_sum < $results_array[$i] && $results_array < 43)
                $minIndex = $i;
                $check[i] = 1;
                $winners++;
        }
        for ($i = 0; $i <4;$i++)
        {
            if ($check[$i]==1)
            {
                if ($one == 0)
                    $one = $i;
                elseif ($two ==0) {
                    $two = $i;
                }
                elseif ($three ==0) {
                    $three = $i;
                }
                else {
                    $four == $i;
                }
            }
        }
        if ($winners == 2)
        {
            echo $players[$one]. "and".$players[$two]; 
        }
        elseif ($winners == 3) {
            echo $players[$one]. ", ".$players[$two]." and ".$players[$three];
        }
        elseif ($winners ==4) {
            echo $players[$one]. ", ".$players[$two].", ".$players[$three] . " and " . $players[$four];
        }
        else
        {
            echo $players[$one];
        }
    }
 
    
?>