<?php
    include "includes/functions.php";
?>
<!DOCTYPE html>
<html>
    <head>
            <title>Lab 3: Silver Jack </title>
        <meta charset="utf-8"/>
         <link rel="stylesheet" href="../Lab3/Css/Styles.css" type="text/css" />
        <style type="text/css">
            h1{
                /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#b5bdc8+0,828c95+52,28343b+100 */
                background: #b5bdc8; /* Old browsers */
                background: -moz-linear-gradient(top, #b5bdc8 0%, #828c95 52%, #28343b 100%); /* FF3.6-15 */
                background: -webkit-linear-gradient(top, #b5bdc8 0%,#828c95 52%,#28343b 100%); /* Chrome10-25,Safari5.1-6 */
                background: linear-gradient(to bottom, #b5bdc8 0%,#828c95 52%,#28343b 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b5bdc8', endColorstr='#28343b',GradientType=0 ); /* IE6-9 */
                border-radius: 20px;
                color: #FFFFFF;
                text-align:center;
                font-Size:50px;
                text-shadow: 4px 2px #474747;
            }

            body{
                background-image: url("Img/card_back.jpg");
                background-size: cover;
            }
            #elias{
                width:45px;
                height:45px;
            }
            .fontChange{
                font-Size: 2em;
                padding-left:20px;
            }
            img{
                border-radius:5px;
                width:60px;
                height:60px;
            }
            h3{
                font-Size:25px;
                text-align: center;
                
                
            }
            #tableDiv{
                margin: 0 auto;
                width: 50%;
            }
            #titleFont{
                font-Size: 2em;
                color: #8c8fcc;    
            }
            table, tr, td {
                font-Size: 25px;
            }
            a{
                background:#23EE11;
                color: black;
                border-radius:10px;
                text-decoration:none;
                font-Size:25px;
                padding:10px;
            }
            a:hover{
                background:#cecece;
                color: #0e0e11;
            }
            #footer{
                text-align:center;
                height:15px;
                width:1000px;
                padding:20px;
                margin: 0 auto;
                margin-bottom:5px;
            }
            #playA{
                text-align:center;
                margin: 0 auto;
                width: 50%;
                padding-bottom:15px;
            }
            hr {
                background-color: #000000;
                height: 2px;
                text-align: center;
                width: 80%;
    }
        </style>
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
                        $array_four = randomArray();
                        
                        $sum1 = getSum($array_one);
                        $sum2 = getSum($array_two);
                        $sum3 = getSum($array_three);
                        $sum4 = getSum($array_four);
                        
                        $total = getSum($array_one+$array_two+$array_three+$array_four);
                       
       
        
                
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
                        
                        echo "<tr><td><img src='Img/Jack.jpg'/></td><td><img src='Img/cards/diamonds/$array_one[0].png'></td>
                     
                        <td><img src='Img/cards/".randomSuit()."/$array_four[1].png'></td>
                        <td><img src='Img/cards/".randomSuit()."/$array_four[2].png'></td> 
                        <td><img src='Img/cards/".randomSuit()."/$array_four[3].png'></td>
                        <td><img src='Img/cards/".randomSuit()."/$array_four[4].png'>
                        <td><span class=fontChange>  $sum4</span></td></td>";
                       
                        
                        echo "<tr><td><h3>". printWinner(findGreater($sum1, $sum2, $sum3, $sum4)) .  "</h3><tr><td>";
                        
                    ?>
               </table>
                <div id='playA'>
                     <a href='../Lab3/review2.php'>Play Again</a>
                </div>
         </div> 
     </div>
     <hr>
        <div id="footer">
            <footer>&copy; D'Antonio, 2016. <br/> Disclaimer: The information on this page might not be accurate. It's used for academic purposes. <br/>
        <img src="../../Img/csumb-logo.png" alt="CSUMB Logo" /></footer>
        </div>
    </body>

</html>                   