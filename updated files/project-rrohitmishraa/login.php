<?php
		session_start();
		$error='';
		if(isset($_POST['submit']))
		{
		    $usr=$_POST['uname'];
			$psw=$_POST['pass'];
			$conn=mysqli_connect("localhost","root","");
			$usr=stripslashes($usr);
			$psw=stripslashes($psw);
			$usr=mysqli_real_escape_string($usr);
			$psw=mysqli_real_escape_string($psw);
	        $db=mysqli_select_db("te_university",$conn);
            $q=mysqli_query("SELECT email,pass FROM stu where email='$usr' and pass='$psw'",$conn);
            $r=mysqli_num_rows($q);
            if($r==1)
            {
                $_SESSION['login_user']=$usr; 
                header("location: profile.php"); 
            } 
			else 
			{ 
                echo "Username or Password is invalid";
            }
             mysqli_close($connection); 
        }			
?>