<?php 
include('CheckLogin.php');
if($_SESSION['Student_Grade'] === "1"){
header('Location: firstpage.php');
}
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
    <div class="container" style="background: url('bgimage/subject.png');background-repeat: no-repeat;background-size: 100% 100%;">
        <div class="header">
            <div class="logo"><img src="edulogo.png" alt="" height="auto" width="120px"></div>
            <div class="button headericons"><ul>
               <li><a href="vision.html"><img src="bgimage/images/headericons/visionm.png" alt=""></a></li>
                <li><a href="profilepage.php"><img src="bgimage/images/headericons/profile.png" alt=""></a></li>
                <li><a href="Logout.php" class="logout"><img src="bgimage/images/headericons/logout.png" alt=""></a></li>
            </ul></div>
        </div>
        <div class="vision ">
           <div class="subjectcontainer">
            <a href="subjectarabicgrade2.php">
                <span class="subject">
                    <img src="subject.jpg" alt="" width="150px" height="auto"> 
                    <h3 class="subname">Arabic</h3>
                </span>
               </a>
               <a href="subjectmathgrade2.php">
                <span class="subject">
                    <img src="subject.jpg" alt="" width="150px" height="auto"> 
                    <h3 class="subname">Maths</h3>
                </span>
               </a>
               <a href="subjectsciencegrade2.php">
                <span class="subject">
                    <img src="subject.jpg" alt="" width="150px" height="auto"> 
                    <h3 class="subname">Science</h3>
                </span>
               </a>
           
        
           </div>
           <div class="scontentbox">
            <h1>Science Content</h1>
            <ul>
                <li><a href="Grade2/Science/?????????? ??????????????????.ppsx" target="_blank">?????????? ??????????????????</a></li>
                <li><a href="Grade2/Science/?????? ??????????.mp4" target="_blank">?????? ??????????</a></li>
                <li><a href="Grade2/Science/?????????? ??????????.pdf" target="_blank">?????????? ??????????</a></li>
    
            </ul>
        </div>
           
           
        </div>
        <div class="footer">
            <p>?? 2021 EDU.  All rights reserved.</p>
            </div>
    </div>
   
</body>
</html>