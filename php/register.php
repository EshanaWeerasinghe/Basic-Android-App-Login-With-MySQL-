<?php
	 include 'config.php';
		 // Check whether username or password is set from android	
     if(isset($_POST['username']) && isset($_POST['password']))
     {
		  // Innitialize Variable
		  $result='';
	   	  $email = $_POST['username'];
          $password = $_POST['password'];
		 
		  // Query database for row exist or not
		  $sql = 'SELECT * FROM m_users WHERE  email = :username AND password = :password';
           
          $sql = "INSERT INTO tbl_login (email,password)
          VALUES ('$email ','$password ')";

	      $stmt = $conn->prepare($sql);
          $stmt->bindParam(':username', $email, PDO::PARAM_STR);
          $stmt->bindParam(':password', $password, PDO::PARAM_STR);
          $stmt->execute();
          if($stmt->rowCount())
          {
			 $result="true";	
          }  
          elseif(!$stmt->rowCount())
          {
			  	$result="false";
          }
		 
		  // send result back to android
   		  echo $result;
  	}
	?>