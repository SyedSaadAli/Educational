<?php

include('CheckLogin.php');

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
    <div class="container" style="background: url('bgimage/first\ page.png');background-repeat: no-repeat;background-size: 100% 100%;">
        <div class="header">
            <div class="logo"><img src="edulogo.png" alt="" height="auto" width="120px"></div>
            <div class="button headericons"><ul>
                <li><a href="vision.html"><img src="bgimage/images/headericons/visionm.png" alt=""></a></li>
                <li><a href="profilepage.php"><img src="bgimage/images/headericons/profile.png" alt=""></a></li>
                <li><a href="Logout.php" class="logout"><img src="bgimage/images/headericons/logout.png" alt=""></a></li>
            </ul></div>
        </div>
        <div class="vision ">
           <div class="gamecontainer">
           <a href="boxpage.php">
            <span class="gbox">
                <img src="bgimage/box.png" alt="" width="150px" height="auto"> 
                <h3 class="subname">متجر الأنشطة
                </h3>
            </span>
           </a>
           <a href="gamepage.php">
            <span class="gbox">
                <img src="bgimage/gam.png" alt="" width="150px" height="auto"> 
                <h3 class="subname">الألعاب
                </h3>
            </span>
           </a>
           <!--if the student is from grade 2 then leave the link as it is else
        change the link from subject.html to subjectgrade1.html
        -->
        <?php if($_SESSION['Student_Grade'] === "2") 
                {
         ?>
           <a href="subject.php">
            <span class="gbox">
                <img src="bgimage/sub.png" alt="" width="150px" height="auto"> 
                <h3 class="subname">المقررات الدراسية
                </h3>
            </span>
           </a>
           <?php }

           if($_SESSION['Student_Grade'] === "1") 
                {
         ?>
           <a href="subjectgrade1.php">
            <span class="gbox">
                <img src="bgimage/sub.png" alt="" width="150px" height="auto"> 
                <h3 class="subname">المقررات الدراسية
                </h3>
            </span>
           </a>
       <?php } ?>
           </div>
           
           
        </div>
        <div class="footer">
            <p>© 2021 EDU.  All rights reserved.</p>
            </div>
    </div>
   
</body>
</html>
