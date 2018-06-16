<?php
	include('dbconnect.php');
	if(empty($_SESSION))
	{
		session_start();
  }
  if(empty($_SESSION['username']))
    {

    }
   
?>

<html>
<head>
  <title>Password Reset</title>
  <style>
      table
      {
        height: 100px;
        width: 250px;
        background-color:transparent;
        position:fixed;
        left:40%;
        top:35%;
        box-shadow: 0px 0px 10px black;
      }

      body
      {
        background-image: url("./Login/Pro.jpg");
        background-size: 100%;
        background-repeat: no-repeat;
        
      }
  </style>
</head>
<body>
  <div>
    <form method = 'post' action= "<?php echo $_SERVER['PHP_SELF'] ?>">
      <table border='0' cellspacing="10" cellpadding="5">
        
            <?php
              if(empty($_SESSION['tempe']))
              {
                
                echo "<tr><td colspan='2'><input type='text' name='email1' placeholder='Enter E-mail' style='height:40px; width:300px;'/></td></tr>";
                echo "<tr><td colspan='2'><center><input type='submit' name='submit' value='Submit' style='width: 100px; height: 30px; background-color: blue; color:white;'/></center></td></tr>";
                if(isset($_POST['submit']))
                {
                $mail = $_POST['email1'];
                $result = mysqli_query($con,"SELECT * FROM account WHERE email = '$mail'");
                if(mysqli_query($con,"SELECT * FROM account WHERE email = '$mail'"))
                {
                  $count = mysqli_num_rows($result);
                  if($count == 0)
                  {
                      echo "<tr><td>E-mail entered is invalid please Re-enter</td></tr>";
                  }
                  else
                  {
                    $row = mysqli_fetch_array($result);
                    $_SESSION['tempe'] = $row['username'];
                    header("location: resetpass.php");
                  }
                }
                else
                {
                  echo "Error :". mysqli_error($con);
                }
              }
              }
              else
              {
                
                  echo "<tr>"."<td colspan='2'>"."Username : ".$_SESSION['tempe']."</td>"."</tr>";
                  echo "<tr><td colspan='2'><center><input type='password' name='pass1' placeholder='New Password' style='height:40px; width:300px;'/></center></td></tr>";
                  echo "<tr><td colspan='2'><center><input type='password' name='pass2' placeholder='Confirm Password' style='height:40px; width:300px;'/></center></td></tr>";
                  echo "<tr><td><center><input type='submit' name='submit1' value='Submit' style='width: 100px; height: 30px; background-color: blue; color:white;'/></center></td></tr>";
                  if(isset($_POST['submit1']))
                  {
                    $pass1 = $_POST['pass1'];
                    $pass2 = $_POST['pass2'];
                    if($pass1 <> $pass2)
                    {
                     echo "<tr><td>Passwords don't match</td></tr>";
                    }
                    else
                    {
                       $temp = $_SESSION['tempe'];
                       $query = "UPDATE account SET password = '$pass1' WHERE username = '$temp'";
                      $result1 = mysqli_query($con,$query);
                      if(mysqli_query($con,$query))
                      {
                        unset ($_SESSION['tempe']);
                        session_destroy();
                        echo "<script> alert('Password Updated Successfully!');
                                 window.location.href='index.php';</script>";
                      }
                      else
                      {
                       echo "Error :". mysqli_error($con);
                      }

                    }
                  }
              }
            ?>
       
      </table>
    </form>
  </div>
</body>
</html>
