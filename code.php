<?php 
include('security.php');
if(isset($_POST['checkout_btn']))
{
	//echo "Working";

$_SESSION['price1'] = 5;
$_SESSION['price2'] = 10;
$_SESSION['price3'] = 15;


	if(isset($_POST['G1_Q'])){
    $Game_Name = $_SESSION['game1'];
    $Game_Price = $_SESSION['price1'];
    $Game_Quantity = $_POST['G1_Q'];
    $Game_Description = $_SESSION['Des1'];

	$query = "INSERT INTO boxorders (BoxOrder_Name,BoxOrder_Price,BoxOrder_Quantity,BoxOrder_Description) VALUES 
  ('$Game_Name','$Game_Price','$Game_Quantity','$Game_Description')";
     $query_run = mysqli_query($connection, $query);
	}

  if(isset($_POST['G2_Q'])){
    $Game_Name = $_SESSION['game2'];
    $Game_Price = $_SESSION['price2'];
    $Game_Quantity = $_POST['G2_Q'];
    $Game_Description = $_SESSION['Des2'];

  $query = "INSERT INTO boxorders (BoxOrder_Name,BoxOrder_Price,BoxOrder_Quantity,BoxOrder_Description) VALUES 
  ('$Game_Name','$Game_Price','$Game_Quantity','$Game_Description')";
     $query_run = mysqli_query($connection, $query);
  }

  if(isset($_POST['G3_Q'])){
    $Game_Name = $_SESSION['game3'];
    $Game_Price = $_SESSION['price3'];
    $Game_Quantity = $_POST['G3_Q'];
    $Game_Description = $_SESSION['Des3'];

  $query = "INSERT INTO boxorders (BoxOrder_Name,BoxOrder_Price,BoxOrder_Quantity,BoxOrder_Description) VALUES 
  ('$Game_Name','$Game_Price','$Game_Quantity','$Game_Description')";
     $query_run = mysqli_query($connection, $query);
  }
	
	
    

     if(isset($_POST['G1_Q']) && isset($_POST['G2_Q'])){
$x = $_POST['G1_Q'] * $_SESSION['price1'] ;
$y = $_POST['G2_Q'] * $_SESSION['price2'] ;
$z= $x + $y ;
    }
     elseif(isset($_POST['G1_Q']) && isset($_POST['G3_Q'])){
$x = $_POST['G1_Q'] * $_SESSION['price1'] ;
$y = $_POST['G3_Q'] * $_SESSION['price3'] ;
$z= $x + $y ;
    }
       elseif(isset($_POST['G2_Q']) && isset($_POST['G3_Q'])){
$x = $_POST['G2_Q'] * $_SESSION['price2'] ;
$y = $_POST['G3_Q'] * $_SESSION['price3'] ;
$z= $x + $y ;
    }
          elseif(isset($_POST['G1_Q']) && isset($_POST['G2_Q']) && isset($_POST['G3_Q'])){
            $a = $_POST['G1_Q'] * $_SESSION['price1'] ;
$x = $_POST['G2_Q'] * $_SESSION['price2'] ;
$y = $_POST['G3_Q'] * $_SESSION['price3'] ;
$z= $x + $y + $a;
    }
      elseif(isset($_POST['G1_Q'])){
$a = $_POST['G1_Q'] * $_SESSION['price1'] ;
    }
    elseif(isset($_POST['G2_Q'])){
$a = $_POST['G2_Q'] * $_SESSION['price2'] ;
    }
      elseif(isset($_POST['G3_Q'])){
$a = $_POST['G3_Q'] * $_SESSION['price3'] ;
    }

    If(isset($a)){
      echo $a;  
      ?>
      <form name="price" action="cartpagepayment_Bill.php" method="POST">
       <input type=hidden name="Total_Price" value="<?php echo $a ; ?>">
        </form>
       <?php
    }
    If(isset($z)){
     echo $z;
       ?>
       <form name="price" action="cartpagepayment_Bill.php" method="POST">
       <input type=hidden name="Total_Price" value="<?php echo $z; ?>">
       <?php
    }
	?>
<script>
    document.price.submit(); //automatically submits the form
</script>


	
	<?php
}

if(isset($_POST['Submit_Btn1']))
{
echo "Working";
    $OldPass = $_POST['Old_Password'];
    $NewPass = $_POST['New_Password'];
    $CP = $_POST['Confirm_New_Password'];

    if($OldPass === $_SESSION['Student_Password'])
    {
        if($NewPass === $CP)
        {

           $query = "UPDATE student SET Student_Password='$NewPass' WHERE StudentID='".$_SESSION['StudentID']."' ";
		                                                                              
           $query_run = mysqli_query($connection, $query);

           if($query_run)
           {
            $_SESSION['status'] = "Student Password is Updated";
            $_SESSION['status_code'] = "success";
            header('Location: profilepage.php'); 
           }
            else
            {
            $_SESSION['status'] = "Student Password is NOT Updated";
            $_SESSION['status_code'] = "error";
            header('Location: profilepage.php');  
            }


        }
	}


	
}



if(isset($_POST['Submit_Btn2']))
{

    $Old_Number = $_POST['Old_Number'];
    $New_Number = $_POST['New_Number'];




    if($Old_Number === $_SESSION['Student_Contact'])
    {



       $query = "UPDATE student SET Student_Contact='$New_Number' WHERE StudentID='".$_SESSION['StudentID']."' ";

       $query_run = mysqli_query($connection, $query);

       if($query_run)
       {
        $_SESSION['status'] = "Student Contact Number is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: profilepage.php'); 
    }
    else
    {
        $_SESSION['status'] = "Student Contact Number is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: profilepage.php');  
    }


}


}



// ----------------------------------------------------------------------------------------------------------


// ----------------------------------------------------------------------------------------------------------


// ----------------------------------------------------------------------------------------------------------


// ----------------------------------------------------------------------------------------------------------


// ----------------------------------------------------------------------------------------------------------

