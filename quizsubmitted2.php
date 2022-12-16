<?php 
include('CheckLogin.php');
include('security.php');
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
    <div class="container" style="background-color: rgb(187, 156, 99); background: none;">
        <div class="header">
            <div class="logo"><img src="edulogo.png" alt="" height="auto" width="120px"></div>
            <div class="button headericons"><ul>
                <li><a href="vision.html"><img src="bgimage/images/headericons/visionm.png" alt=""></a></li>
                <li><a href="profilepage.php"><img src="bgimage/images/headericons/profile.png" alt=""></a></li>
                <li><a href="Logout.php" class="logout"><img src="bgimage/images/headericons/logout.png" alt=""></a></li>
            </ul></div>
        </div>
        <div class="vision">
           <div class="gamecontainer quizcontainer">
             <h1>Thanks for Submitting</h1>
             <br>
             <h2>Your Result is 4/<?php echo $_SESSION['Result']; ?></h2>
           
           </div>
           
        
        </div>
        <br> <br> <br> <br>         <div class="footer">
            <p>© 2021 EDU.  All rights reserved.</p>
            </div>
    </div>
   
</body>
</html>