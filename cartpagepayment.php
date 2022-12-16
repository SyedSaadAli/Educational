<?php 	
include('security.php');


include('CheckLogin.php');


    if(isset($_POST['game1']) && isset($_POST['Des1'])){
	$_SESSION['game1'] = $_POST['game1'];
	$_SESSION['Des1'] = $_POST['Des1'];
	}
	 if(isset($_POST['game2']) && isset($_POST['Des2'])){
	$_SESSION['game2'] = $_POST['game2'];
	$_SESSION['Des2'] = $_POST['Des2'];
	}
	 if(isset($_POST['game3']) && isset($_POST['Des3'])){
	$_SESSION['game3'] = $_POST['game3'];
	$_SESSION['Des3'] = $_POST['Des3'];
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
    <div class="container mcartcontainer" style="height:140vh; background: url('bgimage/cartpage.png');background-repeat: no-repeat;background-size: 100% 100%;">
        <div class="header">
            <div class="logo"><img src="edulogo.png" alt="" height="auto" width="120px"></div>
           
        </div>
        <div class="vision cartcontainer ">

        <div class="boxcontainer">
            <h1>Box List</h1>
            <!--Box Item -->
			<form action=code.php method='POST'>
			<?php  if(isset($_POST['game1'])){  ?>
            <div class="boxitem">
              <div class="boximage"></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ipsa, veniam enim eveniet illo non!</p>
              <span class="quantity">
                
                <input id=demoInput name="G1_Q" type=number min=1 max=110 placeholder="1">
                
               
               </span>
   
             </div>
			 <?php
			 }
			 if(isset($_POST['game2'])){  
			 ?>
            <!--Box item code ends-->
    
                 <!--Box Item -->
              <div class="boxitem">
                  <div class="boximage"></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ipsa, veniam enim eveniet illo non!</p>
                  <span class="quantity">
                 
                   <input id=demoInput name="G2_Q" type=number min=1 max=110 placeholder="1">
                   
                  
                  </span>
       
                 </div>
				  <?php
			 }
			 if(isset($_POST['game3'])){  
			 ?>
                <!--Box item code ends-->
                  <!--Box Item -->
              <div class="boxitem">
                <div class="boximage"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ipsa, veniam enim eveniet illo non!</p>
                <span class="quantity">
               
                 <input id=demoInput name="G3_Q" type=number min=1 max=110 placeholder="1">
                
                 
                
                </span>
     
               </div>
			    <?php
			 }

			 ?>
              <!--Box item code ends-->
        </div>

        <div class="checkout">
            <h1 class="name">Checkout</h1>
            <h2>Name:     <?php echo $_SESSION['Student_Name']; ?></h2>
            <h2>Email:    <?php echo $_SESSION['Student_Email']; ?></h2>
            <h2>Address:  <?php echo $_SESSION['Student_Address']; ?></h2>
            <?php if(isset($_POST['Total_Price'])){ ?>
            <h2>Total Price:  <?php echo $_POST['Total_Price']; ?></h2>
		          <?php  }  ?>
			 
           
            <button type="submit" name="checkout_btn" class="checkoutbtn">Checkout</button>
        </div>

        </div>
           		</form>
        <div class="footer cartfooter" >
            <p>© 2021 EDU.  All rights reserved.</p>
            </div>
        </div>
     
    </div>
    <script>
       
</body>
</html>