<?php 

include('CheckLogin.php');

include('security.php');

if(isset($_POST['math'])){
$a1 = 0 ;
$a2 = 0 ;
$a3 = 0 ;
$a4 = 0 ;
$a5 = 0 ;
$a6 = 0 ;
$a7 = 0 ;
$a8 = 0 ;
$a9 = 0 ;
$a10 = 0 ;

if(isset($_POST['a'])){
	if($_POST['a'] === "5"){
	$a1 = 1;
}
}
if(isset($_POST['b'])){
	if($_POST['b'] === "2"){
	$a2 = 1;
}
}
if(isset($_POST['c'])){
		if($_POST['c'] === "8"){
	$a3 = 1;
}
}
if(isset($_POST['d'])){
		if($_POST['d'] === "True"){
	$a4 = 1;
}
}
if(isset($_POST['e'])){
		if($_POST['e'] === "1"){
	$a5 = 1;
}
}
if(isset($_POST['f'])){
		if($_POST['f'] === "6"){
	$a6 = 1;
}
}
if(isset($_POST['g'])){
		if($_POST['g'] === "9"){
	$a7 = 1;
}
}
if(isset($_POST['h'])){
		if($_POST['h'] === "7"){
	$a8 = 1;
}
}
if(isset($_POST['i'])){
		if($_POST['i'] === "2"){
	$a9 = 1;
}
}
if(isset($_POST['j'])){
		if($_POST['j'] === "8"){
	$a10 = 1;
}
}

$Result = $a1 +$a2 +$a3 +$a4 +$a5 +$a6 +$a7 +$a8 +$a9 +$a10 ; 
echo $Result;
$_SESSION['Result'] = $Result ;
$Name = $_SESSION['Student_Name'];
echo $Name;
$query = "INSERT INTO feedback (Student_Name,MathGrade1_Result) VALUES ('$Name','$Result')";
            $query_run = mysqli_query($connection, $query);
            header('Location: quizsubmitted1.php'); 

}


if(isset($_POST['Arabic_Quiz'])){
$b1 = 0 ;
$b2 = 0 ;
$b3 = 0 ;
$b4 = 0 ;


if(isset($_POST['Q1'])){
	if($_POST['Q1'] === "ب"){
	$b1 = 1;
}
}
if(isset($_POST['Q2'])){
	if($_POST['Q2'] === "أ"){
	$b2 = 1;
}
}
if(isset($_POST['Q3'])){
		if($_POST['Q3'] === "ت"){
	$b3 = 1;
}
}
if(isset($_POST['Q4'])){
		if($_POST['Q4'] === "ث"){
	$b4 = 1;
}
}
$Result = $b1 +$b2 +$b3 +$b4;
$_SESSION['Result'] = $Result ;
$Name = $_SESSION['Student_Name'];
$query = "INSERT INTO feedback (Student_Name,ArabicGrade1_Result) VALUES ('$Name','$Result')";
            $query_run = mysqli_query($connection, $query);
             header('Location: quizsubmitted2.php'); 
}
?>