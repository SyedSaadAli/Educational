
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
    <style>
        .qmaths1{
         text-align: right;
        }
    </style>
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
           <div class="gamecontainer quizcontainer qmaths1">
               <h1>مفاهيم الجمع</h1>
           <form action="quiz.php" method="POST">
            <div class="que">
               <h2>لدى ريم قلمان ثم وجدت ثلاثة آخرين فكم إجمالي عدد الأقلام</h2><br>
              
                5<input type="radio" name="a" value="5"> <br>
               4<input type="radio" name="a" value="4"> <br>
               6<input type="radio" name="a" value="6"> &nbsp; &nbsp; &nbsp;

            </div> 
            <br> <br>
            <div class="que">
                <h2>العدد الاجمالي للغزلان هو</h2><br>
                <img src="bgimage/quiz/q2m.PNG" alt="" width="150px" height="auto"> <br> <br>
                 0<input type="radio" name="b" value="0"> <br>
                2<input type="radio" name="b" value="2"> <br>
                1<input type="radio" name="b" value="1">
 
             </div> 
              <br> <br>
             <div class="que">
                 <h2>جملة الجمع المناسبة للصورة هي</h2><br>
                 <img src="bgimage/quiz/q3m.PNG" alt="" width="350px" height="auto"> <br> <br>
                  4+6=1<input type="radio" name="c" value="1"> <br>
                 3+4=7<input type="radio" name="c" value="7"> <br>
                  3+5=8<input type="radio" name="c" value="8">
  
              </div> 
              <br> <br>
              <div class="que">
                  <h2>جملة الجمع صحيحة </h2><br>
                  <img src="bgimage/quiz/q4m.PNG" alt="" width="350px" height="auto"> <br> <br>
                   True<input type="radio" name="d" value="True"> <br>
                  False<input type="radio" name="d" value="False"> <br>
                
   
               </div> 
               <br> <br>
               <div class="que">
                   <h2>ناتج جمع هو </h2><br>
                   <img src="bgimage/quiz/q5m.PNG" alt="" width="50px" height="auto"> <br> <br>
                   1 <input type="radio" name="e" value="1"> <br>
                   0<input type="radio" name="e" value="0"> <br>
                   2<input type="radio" name="e" value="2"> <br>
    
                </div> 
                <br> <br>
                <div class="que">
                    <h2>ناتج جمع هو</h2><br>
                    <img src="bgimage/quiz/q6m.PNG" alt="" width="50px" height="auto"> <br> <br>
                    8 <input type="radio" name="f" value="8"> <br>
                    6<input type="radio" name="f" value="6"> <br>
                    4<input type="radio" name="f" value="4"> <br>
     
                 </div> 
                 <br> <br>
                 <div class="que">
                     <h2>تجلس 5 عصافير على الشجرة ويوجد 4 عصافير أخرى تطير فكم عدد العصافير الموجودة إجمالاً</h2><br>
                     4<input type="radio" name="g" value="4"> <br>
                     5<input type="radio" name="g" value="5"> <br>
                     9<input type="radio" name="g" value="9"> <br>
      
                  </div> 
                  <br> <br>
                 <div class="que">
                     <h2>من خلال جمع الاجزاء يكون الكل</h2><br>
                     <img src="bgimage/quiz/q8m.PNG" alt="" width="150px" height="auto"> <br> <br>
                     8<input type="radio" name="h" value="8"> <br>
                     7<input type="radio" name="h" value="7"> <br>
                     6<input type="radio" name="h" value="6"> <br>
      
                  </div> 
                  <br> <br>
                  <div class="que">
                      <h2>يمكنك جمع الأعداد من كل ..,..... لإيجاد الكل</h2><br>
                      إجمالاً<input type="radio" name="i" value="1"> <br>
                      جزء<input type="radio" name="i" value="2"> <br>
                      الكل<input type="radio" name="i" value="3"> <br>
       
                   </div> 
                   <br> <br>
                 <div class="que">
                    <h2>رأى أحمد إوزتين فكم عدد الإوز الاضافية التي يجب أن يراها حتى يرى 10 إوزات إجمالاً</h2><br>
                      7<input type="radio" name="j" value="7"> <br>
                      8<input type="radio" name="j" value="8"> <br>
                      9<input type="radio" name="j" value="9"> <br>
       
                   </div> 
            
           
            <button name="math" type="submit">Submit</button>
           </form>
           </div>
           
           
        </div>
        <div class="footer">
            <p>© 2021 EDU.  All rights reserved.</p>
            </div>
    </div>
   
</body>
</html>