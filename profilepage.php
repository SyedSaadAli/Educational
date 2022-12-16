<?php

include('CheckLogin.php');


 //include('security.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <style>
        @import "https://fonts.googleapis.com/css?family=Raleway";
* { box-sizing: border-box; }
body { 
  margin: 0; 
  padding: 0; 
  background: #333;
  font-family: Raleway; 
  text-transform: uppercase; 
  font-size: 11px; 
}
h1{ margin: 0; }
#contact, #number { 
  -webkit-user-select: none; /* Chrome/Safari */        
  -moz-user-select: none; /* Firefox */
  -ms-user-select: none; /* IE10+ */
  margin: 2em ;
  width: 140px; 
  height: 30px; 
  line-height: 30px;
  background: teal;
  color: white;
  font-weight: 700;
  text-align: center;
  cursor: pointer;
  border: 1px solid white;
}

#contact:hover { background: #666; }
#contact:active { background: #444; }

#contactForm, #numberform { 
  display: none;

  border: 6px solid salmon; 
  padding: 2em;
  width: 400px;
  text-align: center;
  background: #fff;
  position: fixed;
  top:50%;
  left:50%;
  transform: translate(-50%,-50%);
  -webkit-transform: translate(-50%,-50%)
  
}

input, textarea { 
  margin: .8em auto;
  font-family: inherit; 
  text-transform: inherit; 
  font-size: inherit;
  
  display: block; 
  width: 280px; 
  padding: .4em;
}
textarea { height: 80px; resize: none; }

.formBtn { 
  width: 140px;
  display: inline-block;
  
  background: teal;
  color: #fff;
  font-weight: 100;
  font-size: 1.2em;
  border: none;
  height: 30px;
}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

    <div class="container mcartcontainer">
      <div class="header">
        <div class="logo"><img src="edulogo.png" alt="" height="auto" width="120px"></div>
        <div class="button headericons"><ul>
            <li><a href="vision.html"><img src="bgimage/images/headericons/visionm.png" alt=""></a></li>
                <li><a href="profilepage.php"><img src="bgimage/images/headericons/profile.png" alt=""></a></li>
                <li><a href="Logout.php" class="logout"><img src="bgimage/images/headericons/logout.png" alt=""></a></li>
         
        </ul></div>
        </div>
        <div class="vision cartcontainer ">
		<br><br><br><br><br>
        <div class="profilecontainer">
            <img src=<?php echo $_SESSION['Student_profilePhoto']; ?> alt="" width="150px" height="auto">

        </div>
        <div class="checkout profilefunction">
            <h1 class="name">Profile</h1>
            <h2>Name:     <?php echo $_SESSION['Student_Name']; ?></h2>
            <h2>Email:    <?php echo $_SESSION['Student_Email']; ?></h2>
            <h2>Address:  <?php echo $_SESSION['Student_Address']; ?></h2>
            <br>
            <div id="contact">Change Password</div>
            <div id="contactForm">
              <form class="user" action="code.php" method="POST">
                <input type="text" name="Old_Password" placeholder="Old Password"  required />
                <input type="text" name="New_Password" placeholder="New Password"  required />
                <input name="Confirm_New_Password" placeholder="Confirm New Password" type="text" required />
                <button type="submit" name="Submit_Btn1" class="btn btn-primary btn-block btn-large">Change Password</button>
                
              </form>
            </div>
            <div id="number">Change Number</div>
            <div id="numberform">
              <form class="user" action="code.php" method="POST">
                <input type="number" name="Old_Number" placeholder="Old Number"  required />
                <input type="number" name="New_Number" placeholder="New Number"  required />
                <button type="submit" name="Submit_Btn2" class="btn btn-primary btn-block btn-large">Change Number</button>
              </form>
            </div>
        </div>
      </div>
        <div class="footer cartfooter">
            <p>© 2021 EDU.  All rights reserved.</p>
            </div>
        </div>
    </div>
    <script>
      $(function() {
        
        // contact form animations
        $('#contact').click(function() {
          $('#contactForm').fadeToggle();
        })
        $(document).mouseup(function (e) {
          var container = $("#contactForm");
      
          if (!container.is(e.target) // if the target of the click isn't the container...
              && container.has(e.target).length === 0) // ... nor a descendant of the container
          {
              container.fadeOut();
          }
        });
        
      });
          </script>
<script>
  $(function() {
    
    // contact form animations
    $('#number').click(function() {
      $('#numberform').fadeToggle();
    })
    $(document).mouseup(function (e) {
      var container = $("#numberform");
  
      if (!container.is(e.target) // if the target of the click isn't the container...
          && container.has(e.target).length === 0) // ... nor a descendant of the container
      {
          container.fadeOut();
      }
    });
    
  });
      </script>
</body>
</html>