<?php
$suits = array("clubs", "diamonds", "hearts", "spades");
$deck = array();
for($i = 1; $i < 52; $i++)
{
    $deck[] = $i;
}
//shuffle($deck);
//since we need to have an array of 28 students, we could try doing a dictionary type of array
$student_card_value = array();
$student_name = array(); //string, contains name of the players.
$student_pic = array(); //string, contains location of image.
$student_hand = array(); //holds the array of cards
$repeats = array();
array_push($student_name, "Luigi");
array_push($student_name, "Alex");
array_push($student_name, "Jack");
array_push($student_name, "House");
array_push($student_pic, "luigi");
array_push($student_pic, "alex");
array_push($student_pic, "jack");
array_push($student_pic, "house");
function run()
{
  // echo '<div>';
    global $student_hand;
    global $deck;
    global $suits;
    array_push($student_hand, getHand());
    array_push($student_hand, getHand());
    array_push($student_hand, getHand());
    array_push($student_hand, getHand());
    displayHand();
    getWinner();
  //  echo '<div/>';
}
function getHand(){
    global $deck; 
    global $suits; 
    global $student_card_value;
    global $repeats;
    
    $isFound = FALSE;
   
    $user_options = array();
    $amount = 0;
    
    while($amount < 42){
        $random_card = rand(0, count($deck));
        $card_suit = $suits[floor($random_card/ 13)]; 
        $card_value = ($random_card % 13) + 1;
        
        for($i=0; $i < count($repeats); $i++)
        {
            if($random_card === $repeats[$i])
            {
                $isFound = TRUE;
                break;
            }
        }
        
        if($isFound === FALSE)
        {
            if($amount + $card_value <= 42){
            $amount = $amount + $card_value;
            
            //removes the card that was chosen from the deck
            unset($GLOBALS[$deck[$random_card]]);
            //array_push($repeats, $random_card);
            
            array_push($user_options, $card_suit . "/" .$card_value);
        }
        else{
            break;
        }
            
        }
        
        
    }
    
    array_push($student_card_value, $amount); //this will add the sum for each student to 
                                              //the array which will work in parallel with another
                                              //array that will keep track of the student's (name/pictre)
    return $user_options;
    
}
function getWinner()
{
    global $student_card_value;
    global $student_name;
    global $student_pic;
    
    $winners = array();
    $winner_value;
    $winner_name;
    $winner_pic;
    
    $temp_winner = $student_card_value[0];
    $temp_winner_pic = $student_pic[0];
    $temp_winner_name = $student_name[0];
    $totalSum = $student_card_value[0];
    
    $max_value = max($student_card_value);
    $name_position = 0;
    for($i = 0; $i < 4; $i++) // iterates through whole list of the cards sum of each persons hand
    {
        $totalSum += $student_card_value[$i];
        
        if( $max_value === $student_card_value[$i]) // if the temp hand is smaller than current value of student hand
        {                                           //it puts the current value of student into the temp winner.
            //$temp_winner = $student_card_value[$i]; //also keeps track of the current student pic and name.
            //$temp_winner_pic = $student_pic[$i];
            //$temp_winner_name =$student_name[$i];
            //$name_position = $i;
            array_push($winners, $student_pic[$i]);
        }
        
    }
    $winner_value = $temp_winner;
   //$winner_name = $student_name[$name_position];
    $winner_pic = $temp_winner_pic;
    
    
    $counter = 0;
    
    for($i = 0; $i < count($winners); $i++){
        $name = $winners[$i];
        $first_letter = substr($name, 0, 1);
        if($first_letter === "l"){
            $winner_name = "Luigi";
             $counter++;
        }
        elseif($first_letter === "a"){
            $winner_name = "Alex";
             $counter++;
        }
        elseif($first_letter == "j"){
            $winner_name = "Jack";
             $counter++;
        }
        elseif($first_letter == "h"){
            $winner_name = "House";
             $counter++;
        }
         elseif($first_letter == "t"){
            $winner_name = "Tied";
             $counter++;
        }
        
       
        if($counter > 1)
        {
            echo " & ";
        }
        echo "$winner_name";
        
    }
    if($counter > 1){
            echo " are the winners! They received $totalSum points";
        }
        else{
            echo " is the winner! They received $totalSum points";
        }
}
function displayHand()
{
    global $student_pic;
    global $student_hand;
    global $student_card_value;
    
    $length;
    
    shuffle($student_pic);
    
    $extPNG = ".png";
    $extJPG = "jpg";
    
    echo "<table>";
    for($i=0; $i<count($student_hand); $i++)
    {
        echo'<tr>';
        echo'<td>';
        echo"<img src=Img/" . $student_pic[$i] . ".jpg>";
        echo'</td>';
        
        $length = $student_hand[$i];
        
        for($j=0; $j<count($length); $j++)
        {
            echo'<td>';
            echo "<img src=Img/cards/" .$student_hand[$i][$j] .".png>";
            echo'</td>';
        }
        echo'<td>';
        echo $student_card_value[$i];
        echo '</td>';
        echo '</tr>';
        echo "<br/>";
    }
    echo"</table>";
}
?>
<!DOCTYPE HTML>
<html>
    <head>
<<<<<<< HEAD
        <title>Lab 3: Silver Jack </title>
        
        <link rel="stylesheet" href="../Lab3/Css/Styles.css" type="text/css" />
    </head>
    <body>
        <main>
        <div id="header1">
            <h1>Silverjack</h1>
        </div>
              <center>
                      <?=run()?>
              </center>
        <br/>
        </main>
        <form>
           <center> <button type="submit" onclick="<?php run() ?>"name="run" id="button">PlayAgain</button></center>
        </form>
        <br />
        <br />
        
         <hr>
=======
            <title>Lab 3: Silver Jack </title>
        <meta charset="utf-8"/>
         <link rel="stylesheet" href="../CST336-Lab3/Css/Styles.css" type="text/css" />
    </head>
    <body>
        <div id="wrapper">
             <h1>Silverjack</h1>

            <div id="tableDiv">
                
               <table>
                   <tr><td style="color: #ff5454"><strong>Players</strong></td><th colspan = "5" style="color: #ff5454">Cards</th>
                   <th colspan = "5" style="color: #ff5454">Score</th></tr>
                    
                    <?php
                        $counter = 0;
                        $array_one = randomArray();
                        $array_two = randomArray();
                        $array_three = randomArray();
                        $array_four = randomArray();
                        $pic_array=array('Alex','Jack','Luigi','House');
                        shuffle($pic_array);
                        
                        $sum1 = getSum($array_one);
                        $sum2 = getSum($array_two);
                        $sum3 = getSum($array_three);
                        $sum4 = getSum($array_four);
                        $hearts = array(1,2,3,4,5,6,7,8,9,10,11,12,13);
                        $clubs = array(1,2,3,4,5,6,7,8,9,10,11,12,13);
                        $spades = array(1,2,3,4,5,6,7,8,9,10,11,12,13);
                        $diamonds = array(1,2,3,4,5,6,7,8,9,10,11,12,13);
                        $h = 0;
                        $c =0;
                        $s =0;
                        $d =0;
                        shuffle($hearts);
                        shuffle($clubs);
                        shuffle($spades);
                        shuffle($diamonds);
                        for($k = 0; $k < 4; $k++)
                        {
                             echo "<img src='Img/".$pic_array[$k].".jpg'/> $pic_array[$k]";
                             $sum =0;
                             while ($sum < 36) {
                                $temp = randomSuit();
                                if ($temp == "hearts") {
                                    echo "<img src='Img/cards/hearts/".$hearts[$h].".png'/>";
                                    $sum += $hearts[$h];
                                    $h++;
                                 
                                }
                                elseif ($temp == "spades") {
                                    echo "<img src='Img/cards/spades/".$spades[$s].".png'/>";
                                    $sum += $spades[$s];
                                    $s++;
                                }
                                elseif ($temp == "clubs") {
                                    echo "<img src='Img/cards/clubs/".$clubs[$c].".png'/>";
                                    $sum += $clubs[$c];
                                    $c++;
                                }
                                else {
                                    echo "<img src='Img/cards/diamonds/".$diamonds[$d].".png'/>";
                                    $sum += $diamonds[$d];
                                    $d++;
                                 }
                             }
                             
                        }

                        echo "<h3>". printWinner(findGreater($sum1, $sum2, $sum3, $sum4)) .  "</h3>";

                        
                    ?>
               </table>
                <div id='playA'>
                     <a href='../CST336-Lab3/review2.php'>Play Again</a>
                </div>
         </div> 
     </div>
     <hr>
>>>>>>> a5a3bdace99d1a92a552c687fc9b871cbc0192dc
        <div id="footer">
             <a class='link_button' href='https://cst336-ginos89.c9users.io/homepage.html'>Homepage</a><br /><br /><br />
            <footer>&copy; D'Antonio, Cousineau, Ruvalcaba 2016. <br/> Disclaimer: The information on this page might not be accurate. It's used for academic purposes. <br/>
        <img src="../../Img/csumb-logo.png" alt="CSUMB Logo" /></footer>
        </div>
    </body>

</html> 