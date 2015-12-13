<?php 
include "connect.php";


	if (isset($_POST["submit"]))
	{
   	 $name = $_POST["Username"];
   	 $password =$_POST["Password"];
     if ($name != null && $password != null) 
	 {
        $sql = mysql_query("SELECT * FROM login WHERE user_name = '$name' AND password = '$password'") or die(mysql_error());
        
			$row = mysql_num_rows($sql);
				//$data = $row[0];
			
				if($row==1)
				{
					echo "login successfully ...." ;
					//successful_login.html
					header('Location: ../successful_login.html');
				}	
				else
				echo "username or password not match ".mysql_error();;

       
    }
	else
	{
		echo "enter user name or password";
	}
}

?>
