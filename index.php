<?php  session_start();  ?>
<html>
<head>
	<style type="text/css">
		.lan{
			width:90%;
			height:50px;
			background: red;
			margin: 0 auto;
			border: 4px solid black;
			border-radius: 50px;
		}
	</style>
</head>
<body>
    <div class="lan">
    	<h2 style="text-align: center;">This code helps you create a social networking site</h2>
    </div>
    <?php
       include 'mysqli.php';
      $query='
        SELECT * FROM user 
        where user_id = "'.$_SESSION['user_id'].'"
      ';

      $stms=$connect->prepare($query);
      $stms->execute();
      $fetch=$stms->fetchall();

      foreach ($fetch as $row) 
      {
      	echo "<h1 style='text-align:center;'>Welcome '".$row['username']."'</h1>";
      }
    ?>
    <h1 style="text-align: center;">SESSION=<?php echo $_SESSION['user_id'];  ?></h1>
</body>
</html>


