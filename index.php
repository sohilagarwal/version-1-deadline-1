<?php
date_default_timezone_set("Asia/Kolkata");
session_start();

include_once('includes/functions.php');


include_once('includes/system_connection.php');
$action='';
$id='';
$base_url="http://".$_SERVER['HTTP_HOST']."/webon/";


if(isset($_REQUEST['id'])){
	$id=$_REQUEST['id'];
}else {
	$id='';
}
if(isset($_REQUEST['action'])){
$action=$_REQUEST['action'];
}
else
{
	$action='home';
}

if(isset($_REQUEST['val'])){
 $val=$_REQUEST['val'];
}else {
 $val='';
}


$action_mode=$action;
$main_action=$action_mode;
$uri=$_SERVER['REQUEST_URI'];

//$q=explode("?",$uri);
 $q=$id;

if(isset($main_action))
{


	switch ($main_action)
		{
			
			case 'home':
			$title="Home | The plate hub";
			include('home.php');
			break;
			
			case 'login':
			$title = "Login";
			include_once "login.php";
			break;
			
			case 'signup':
			$title = "Register";
			include_once "register.php";
			break;
			
			case 'contact-us':
			$title = "Contact";
			include_once "contact.php";
			break;
			
			case 'about-us':
			$title ="About";
			include_once "about.php";
			break;
			
			case 'legal':
			$title = "Legal";
			include_once "legal.php";
			break;
			
			case 'signingup':
			//check already exist or not
			$check_exist = mysql_query("SELECT * FROM users WHERE email='".mysql_real_escape_string($_POST['email'])."'");
			if(mysql_num_rows($check_exist)>0){
				echo 'You are already registered, please login!';
			}else{
				
				$path="profile_pic/";
				$type = array('jpg','jpeg','png','gif');
				$explode = explode('.',$_FILES['image']['name']);
				$extension = end($explode);
				if(in_array($extension,$type)){
					$new_name = time().'_'.$_FILES['image']['name'];
					move_uploaded_file($_FILES['image']['tmp_name'],$path.$new_name);
					$insert = mysql_query("INSERT INTO users (name,email,pro_pic,phone,address,dob,income_level,educational_level,ethnicity,password) VALUES('".mysql_real_escape_string($_POST['name'])."','".mysql_real_escape_string($_POST['email'])."','".mysql_real_escape_string($new_name)."','".mysql_real_escape_string($_POST['phone'])."','".mysql_real_escape_string($_POST['location'])."','".mysql_real_escape_string($_POST['dob'])."','".mysql_real_escape_string($_POST['income'])."','".mysql_real_escape_string($_POST['education'])."','".mysql_real_escape_string($_POST['ethnicity'])."','".mysql_real_escape_string($_POST['password'])."')");
					
					if(mysql_affected_rows()>0){
						echo 1;
					}else{
						echo 'Somethig went wrong!';
					}
				
				}else{
					echo 'Bad file type';
				}
			}
			break;
			
			case 'submitLogin':
			$check_login = mysql_query("SELECT * FROM users WHERE email='".mysql_real_escape_string($_POST['email'])."' AND password='".mysql_real_escape_string($_POST['password'])."'");
			if(mysql_num_rows($check_login)>0){
				echo 1;
			}else{
				echo 'Wrong username or password';
			}
			break;
			
			case 'submitContact':
			$to = 'me.nayanendu@gmail.com';
			//$to = 'contact@theplatehub.com';
			$subject = 'Contact email | The Plate Hub';
			$message = 'Name : '.$_POST['name'].'<br>'.'Email : '.$_POST['email'].'<br>'.'Phone : '.$_POST['phone'].'<br>'.'Message : '.$_POST['message'];
			$email = $_POST['email'];
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			// More headers
			$headers .= 'From: <'.$email. ">\r\n";
			
			$headers .= "Reply-To: ".$email."\r\n";
			$headers .= "Return-Path: ".$email."\r\n";
			
			$headers.= "X-Priority: 1\r\n"; 
			$mail_send=mail($to,$subject,$message,$headers);
			if($mail_send){
				echo 1;
			}else{
				echo 'Something went wrong!';
			}
			break;
			
			
			default:
			include('home.php');
			break;
			
			
			
		} 
}
else
{
	$title="Home";
	include('home.php');
}

?>