<?php

// include('CheckLogin.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" style="background: url('bgimage/games.PNG');background-repeat: no-repeat;background-size: 100% 100%;">
        <div class="header">
            <a href="cartpagepayment.html" class="cartbtn">Cart Page</a>
            <div class="logo"><img src="edulogo.png" alt="" height="auto" width="120px"></div>
           
        </div>
        <div class="vision ">
           <div class="subjectcontainer">
            <form action="cartpagepayment.php" method="POST" enctype="multipart/form-data">
                <span class="subject">
                    <img src="placeholder.jpg" alt="" width="150px" height="auto" style="border: 2px solid green;">
                    <p name="Des" id="para1" type="text" style="font-size: 10px;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, facere.</p>
                    <input type=hidden name="Des1" value="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, facere.">
                    <input type="checkbox" value="Game1" name="game1">
                </span>
                <span class="subject">
                    <img src="placeholder.jpg" alt="" width="150px" height="auto" style="border: 2px solid green;">
                    <p name="g2" type="text" style="font-size: 10px;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, facere.</p>
                    <input type=hidden name="Des2" value="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, facere.">
                    <input type="checkbox" value="Game2" name="game2">
                </span>
                <span class="subject">
                    <img src="placeholder.jpg" alt="" width="150px" height="auto" style="border: 2px solid green;">
                    <p name="g3" type="text" style="font-size: 10px;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, facere.</p>
                    <input type=hidden name="Des3" value="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, facere.">
                    <input type="checkbox" value="Game3" name="game3">
                </span>
            <div class="checklist">
                
                   
                    
                   
                   <br>
                    <button style="width: 10%; height: 10%; " type="submit" value="Confirm" name="submit">Confirm</button>
                </form>
            </div>
        
           </div>
           
           
           
        </div>
        <div class="footer">
            <p>© 2021 EDU.  All rights reserved.</p>
            </div>
    </div>
   
</body>
</html>