<?php
    include "includes/functions.php";
?>
<!DOCTYPE html>
<html>
    <head>
            <title>Lab 3: Silver Jack </title>
        <meta charset="utf-8"/>
         <link rel="stylesheet" href="../Lab3/Css/Styles.css" type="text/css" />
       
    </head>
    <body>
        <div id="wrapper">
             <h1>Silverjack</h1>

            <div id="tableDiv">
                
               <table>
                   <tr><td style="color: #ff5454"><strong>Players</strong></td><th colspan = "5" style="color: #ff5454">Cards</th>
                   <th colspan = "5" style="color: #ff5454">Score</th></tr>
                    
                    <?php
                        $array_one = randomArray();
                        $array_two = randomArray();
                        $array_three = randomArray();
                        
                        $sum1 = getSum($array_one);
                        $sum2 = getSum($array_two);
                        $sum3 = getSum($array_three);
                        
                        $total = getSum($array_one+$array_two+$array_three);
                       
       
        
                
                        echo "<tr><td><img src='Img/Jack.jpg'/></td><td><img src='Img/cards/diamonds/$array_one[0].png'></td>
                     
                        <td><img src='Img/cards/".randomSuit()."/$array_one[1].png'></td>
                        <td><img src='Img/cards/".randomSuit()."/$array_one[2].png'></td> 
                        <td><img src='Img/cards/".randomSuit()."/$array_one[3].png'></td>
                        <td><img src='Img/cards/".randomSuit()."/$array_one[4].png'>
                        <td><span class=fontChange>  $sum1</span></td></td>";
                        echo "<tr><td><img src='Img/Alex.jpg'/></td><td><img src='Img/cards/diamonds/$array_one[0].png'></td>
                  
                        <td><img src='Img/cards/".randomSuit()."/$array_two[1].png'></td>
                        <td><img src='Img/cards/".randomSuit()."/$array_two[2].png'></td> 
                        <td><img src='Img/cards/".randomSuit()."/$array_two[3].png'></td>
                        <td><img src='Img/cards/".randomSuit()."/$array_two[4].png'>
                        <td><span class=fontChange>  $sum2</span></td></td>";
                        
                        echo "<tr><td><img src='Img/Luigi.jpg'/></td><td><img src='Img/cards/diamonds/$array_one[0].png'></td>
                    
                        <td><img src='Img/cards/".randomSuit()."/$array_three[1].png'></td>
                        <td><img src='Img/cards/".randomSuit()."/$array_three[2].png'></td> 
                        <td><img src='Img/cards/".randomSuit()."/$array_three[3].png'></td>
                        <td><img src='Img/cards/".randomSuit()."/$array_three[4].png'>
                        <td><span class=fontChange>  $sum3</span></td></td>";
                       
                        
                        echo "<tr><td><h3>". printWinner(findGreater($sum1, $sum2, $sum3)) .  "</h3><tr><td>";
                        
                    ?>
               </table>
                <div id='playA'>
                     <a href='../Lab3/review2.php'>Play Again</a>
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