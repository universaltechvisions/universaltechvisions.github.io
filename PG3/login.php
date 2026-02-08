<?php
   if(isset($_POST)){
      $conn_string = "host=localhost port=5432 dbname=UTVDB user=postgres password=password";
      $conn = pg_pconnect($conn_string);
      $myemail = $_POST['text-1707508345528-0'];
      $mypassword = $_POST['text-1707508448757-0']; 
      $sql = "SELECT id FROM account WHERE email = '$myemail'";
      $resulta = pg_query($conn,$sql);
      $sql = "SELECT pwd FROM account WHERE email = '$myemail'";
      $resultb = pg_query($conn,$sql);
      if ($resulta=$myemail) {
      	if ($resultb=$mypassword) {
	 	 setcookie('UTVLOGIN', $myemail, time() + (86400 * 14), "/"); 
			header("Refresh:0"); 
		 }else{
		
	}
	}


      

   }
?>