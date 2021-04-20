
<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>
        My_WebPage
</title>
</head>

<body>

<marquee class = "marquee" bgcolor =  #663300>Welcome</marquee>
<br><br><br>

<?php
        
          
if(isset($_REQUEST['submit']) && isset($_REQUEST['fname']) && isset($_REQUEST['lname']) && isset($_REQUEST['email']) && isset($_REQUEST['user']))
{
        $conn = mysqli_connect("localhost", "root", "", "student");

        if($conn === false){
            die("ERROR: Could not connect. ". mysqli_connect_error());
        }

        $first_name =  $_REQUEST['fname'];
        $last_name = $_REQUEST['lname'];
        $email =  $_REQUEST['email'];
        $user = $_REQUEST['user'];
        $password = $_REQUEST['password'];
        $sha1 = sha1($password);

        $sql = "INSERT INTO registration_form VALUES ('$first_name', '$last_name', '$email', '$user', '$sha1')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h1> You have Successfully Signed Up Click here to go to Home Page</h1>";?>
                <table>
                <form action = "login.php">
                <tr style="height:35px;font-size:20px;">
                <td align="center"><input type = "submit" name="submit" class = "btn" value = "Login"></td>
                </form>
                </tr>
                </table><?php
        } else{
            echo "ERROR: Occured! $sql. ". mysqli_error($conn);
        }
        mysqli_close($conn);
}
       
else
{
header("Location:home.php");
} 

?>


</body>
</html>
