
<?php

include('CheckLogin.php');

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container" style="background-color: wheat; background: none;">
        <div class="header">
            <div class="logo"><img src="edulogo.png" alt="" height="auto" width="120px"></div>
            <div class="button headericons"><ul>
                 <li><a href="vision.html"><img src="bgimage/images/headericons/visionm.png" alt=""></a></li>
                <li><a href="profilepage.php"><img src="bgimage/images/headericons/profile.png" alt=""></a></li>
                <li><a href="Logout.php" class="logout"><img src="bgimage/images/headericons/logout.png" alt=""></a></li>
            </ul></div>
        </div>
        <div class="vision ">
           <div class="gamecontainer quizcontainer">
               <h1>أكتب الحرف المشترك في اسم الصورتين:</h1>
           <form action="quiz.php" method="POST">
            <span class="que">
                <img src="bgimage/quiz/pic1.png" alt="" width="300px" height="auto"><br>
                <input name="Q1"  type="text" placeholder="أدخل الإجابة">
            </span> 
            <br> <br>
            <span class="que">
                <img src="bgimage/quiz/pic2.png" alt="" width="300px" height="auto"><br>
                <input name="Q2" type="text" placeholder="أدخل الإجابة">
            </span> 
            <br> <br>
            <span class="que">
                <img src="bgimage/quiz/pic3.png" alt="" width="300px" height="auto"><br>
                <input name="Q3" type="text" placeholder="أدخل الإجابة">
            </span> 
            <br> <br>
            <span class="que">
                <img src="bgimage/quiz/pic4.png" alt="" width="300px" height="auto"><br>
                <input name="Q4" name="" type="text" placeholder="أدخل الإجابة">
            </span> 
            <br> <br> 
            <button name="Arabic_Quiz"type="submit">Submit</button>
           </form>
           </div>
           
           
        </div>
        <div class="footer">
            <p>© 2021 EDU.  All rights reserved.</p>
            </div>
    </div>
   
</body>
</html>