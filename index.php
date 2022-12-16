<?php

include('security.php');


include('CheckLogin.php');
$_SESSION['Username'] = $_POST['Username']; 



if(isset($_POST['login_btn'])){


$username_login = $_POST['Username']; 
//$_SESSION['Username'] = $_POST['Username']; 
$password_login = $_POST['Password']; 
//$_SESSION['Password'] = $_POST['Username']; 
$role = $_POST['role'];
$_SESSION['role'] = $_POST['role'];

if($role === "admin"){
  $query = "SELECT * FROM admin WHERE Admin_Name='$username_login' AND Admin_Password='$password_login' LIMIT 1";
    $query_run = mysqli_query($connection, $query);
  $usertypes = mysqli_fetch_array($query_run);
  $query2 = "SELECT * FROM admin";
                $query_run2 = mysqli_query($connection, $query2);
      if(mysqli_num_rows($query_run2) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run2))
                            {
              if($row['Admin_Name'] === $username_login && $row['Admin_Password'] === $password_login)
              {
               
                $_SESSION['AdminID'] = $row['AdminID'];
                          $_SESSION['Admin_Name'] = $row['Admin_Name'];
                         
                          $_SESSION['Admin_Password'] = $row['Admin_Password'];
                              header('Location: admin/Student_Profile.php');
              }
              }
            }

}

if($role === "teacher"){
    $query = "SELECT * FROM teacher WHERE Teacher_Name='$username_login' AND Teacher_Password='$password_login' LIMIT 1";
    $query_run = mysqli_query($connection, $query);
	$usertypes = mysqli_fetch_array($query_run);

$query2 = "SELECT * FROM teacher";
                $query_run2 = mysqli_query($connection, $query2);
      if(mysqli_num_rows($query_run2) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run2))
                            {
              if($row['Teacher_Name'] === $username_login && $row['Teacher_Password'] === $password_login)
              {
               
                $_SESSION['TeacherID'] = $row['TeacherID'];
                          $_SESSION['Teacher_Name'] = $row['Teacher_Name'];
                          $_SESSION['Teacher_Email'] = $row['Teacher_Email'];
                          $_SESSION['Teacher_Password'] = $row['Teacher_Password'];
                $_SESSION['Teacher_profilePhoto'] = $row['Teacher_profilePhoto'];
                $_SESSION['Teacher_Request'] = $row['Teacher_Request'];
                header('Location: teacher/Lesson.php');
              
              }
              }
            }
	
}

if($role === "student"){

    $query = "SELECT * FROM student WHERE Student_Name='$username_login' AND Student_Password='$password_login' LIMIT 1";
    $query_run = mysqli_query($connection, $query);
	$usertypes = mysqli_fetch_array($query_run);

	 $query2 = "SELECT * FROM student";
                $query_run2 = mysqli_query($connection, $query2);
			if(mysqli_num_rows($query_run2) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run2))
                            {
							if($row['Student_Name'] === $username_login && $row['Student_Password'] === $password_login)
							{
               
								$_SESSION['StudentID'] = $row['StudentID'];
			                    $_SESSION['Student_Name'] = $row['Student_Name'];
			                    $_SESSION['Student_Email'] = $row['Student_Email'];
			                    $_SESSION['Student_Age'] = $row['Student_Age'];
			                    $_SESSION['Student_Grade'] = $row['Student_Grade'];
			                    $_SESSION['Student_Password'] = $row['Student_Password'];
								$_SESSION['Student_Contact'] = $row['Student_Contact'];
								$_SESSION['Student_Address'] = $row['Student_Address'];
								$_SESSION['Student_profilePhoto'] = $row['Student_profilePhoto'];
                  header('Location: firstpage.php');
							}
							}
						}

}



}

if(isset($_POST['login_btn1']))
{
    $S_Username = $_POST['S_Username'];
    $S_Email = $_POST['S_Email'];
    $S_Age = $_POST['S_Age'];
    $S_Grade = $_POST['S_Grade'];
	$S_Password = $_POST['S_Password'];
	$S_ConfirmPassword = $_POST['S_ConfirmPassword'];
	$S_ContactNumber = $_POST['S_ContactNumber'];
	$Student_Address = $_POST['Student_Address'];
	#$_File = $_POST['fileToUpload'];

	
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
   # echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
	$ImageName = $_FILES['fileToUpload']['name'];
$fileElementName = 'fileToUpload';
$path = 'uploads/'; 
$location = $path . $_FILES['fileToUpload']['name']; echo $location;

move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $location); 
  } else {
   # echo "File is not an image.";
    $uploadOk = 0;
	}
  
    
        if($S_Password === $S_ConfirmPassword)
        {

            $query = "INSERT INTO student (Student_Name,Student_Email,Student_Age,Student_Grade,Student_Password,Student_Contact,Student_Address,Student_profilePhoto) VALUES ('$S_Username','$S_Email','$S_Age','$S_Grade','$S_Password','$S_ContactNumber','$Student_Address','$location')";
            $query_run = mysqli_query($connection, $query);
			 header('Location: Login_Page.html');
            
        }
        
    }


	
if(isset($_POST['login_btn2']))
{
    $T_Username = $_POST['T_Username'];
    $T_Email = $_POST['T_Email'];
    $T_Password = $_POST['T_Password'];
    $T_ConfirmPassword = $_POST['T_ConfirmPassword'];
	#$img = $_POST['img'];
		
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
   # echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
	$ImageName = $_FILES['fileToUpload']['name'];
$fileElementName = 'fileToUpload';
$path = 'uploads/'; 
$location = $path . $_FILES['fileToUpload']['name'];

move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $location); 
  } else {
   # echo "File is not an image.";
    $uploadOk = 0;
	}

        if($T_Password === $T_ConfirmPassword)
        {
		
            $query = "INSERT INTO teacher (Teacher_Name,Teacher_Email,Teacher_Password,Teacher_profilePhoto) VALUES ('$T_Username','$T_Email','$T_Password','$location')";
            $query_run = mysqli_query($connection, $query);
			 header('Location: Login_Page.html');  
            
        }
      
    }





?>