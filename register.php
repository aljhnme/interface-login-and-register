<?php 

   include 'jqury.php'; 

?>
<html>
<head>
 <style type="text/css">
	.sl{
         
        background:#9E9896;
        width:350px;
        height:500spx;
        margin: 0 auto;
        border-radius: 12px;
        border: 3px solid #4A4543;
     }
     .ts{
     	color: black;
     	text-align: center;
     }
     .imglo{

     	width: 200px;
     	margin-left: auto;
     	margin-right: auto;
     	display: block;
     }
     .st{
     	width: 93%;
     	height: 35px;
     	margin-left:2%;
     	border-radius: 18px;
     	border: 1px solid;
     	padding-left: 7px;

     }
     .reister{
     	width: 66px;
     	height: 33px;
     	border-radius: 20px;
     	margin-left:40%;
     	margin-top: 20px;

     }
     .smalltext{
     	left: 66px;
     }
     .body {
       background-image: url('bdr.jpg');
       background-repeat: no-repeat;
       background-attachment: fixed;
       background-size: 100% 100%;
      }
 </style>
</head>
<body class="body">
   <div class="sl">
   	<h2 class="ts">REGISTER</h2>
   	<img class="imglo" src="register.png">
        <h3 id="text_r"></h3>
   	<input placeholder="Username" type="text" id="username" name="username" class="st">
    <br>
    <br>
    <input placeholder="password" type="text" id="password" name="password" class="st">
    <br>
    <br>
    <input placeholder="password_c" type="text" id="passwordc" name="passwordc" class="st">
       
    <div class="inlo">
    	 <button class="reister">Register</button>
    </div>
    <a href="login.php"><h3 style="text-align: center;">Login</h3></a>
   </div>
</body>
</html>