<?php
    include "includes/functions.php";
?>
<!DOCTYPE html>
<html>
    <head>
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
        <div id="footer">
            <footer>&copy; D'Antonio, Cousineau, Ruvalcaba 2016. <br/> Disclaimer: The information on this page might not be accurate. It's used for academic purposes. <br/>
        <img src="../../Img/csumb-logo.png" alt="CSUMB Logo" /></footer>
        </div>
    </body>

</html>                   