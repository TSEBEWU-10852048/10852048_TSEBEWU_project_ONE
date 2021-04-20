
<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>
        My_WebPage
</title>
</head>

<body>
<marquee class = "marquee" bgcolor =  #663300>Welcome To Almighty CompAIDs@</marquee>
<?php
if(!isset($_SESSION['start']) && !isset($_POST['submit']))
{
echo "<h1>You must Login To Access This";
}
else
{
if(isset($_POST['submit']))
{
        $conn = mysqli_connect("localhost", "root", "", "student");
        if($conn === false){
            die("ERROR: Could not connect. ". mysqli_connect_error());
        }
   
        $user =  $_REQUEST['user'];
        $password =  $_REQUEST['password'];  
        $sha1 = sha1($password);
        $sql = "SELECT * FROM registration_form WHERE school_id = '$user' and pin = '$sha1'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) 
        {
                while($row = mysqli_fetch_assoc($result)) 
                {      session_start(); 
                        $_SESSION['start'] = $user;
                        echo  "<h1>       WELCOME ".$row['first_name']." ".$row['last_name'];?>

                        <table>
                                <tr>
                                        <td>
                                                <table>
                                                        <tr>
                                                                <td>
                                                                        <button type="button" class = "btn" onclick="about.php" >About</button>
                                                                </td>
                                                        </tr>

                                                        <tr>
                                                                <td>
                                                                        <button type="button" class = "btn" onclick="contat.php">Contact</button>
                                                                </td>
                                                        </tr>

                                                        <tr>
                                                                <td>
                                                                        <button type="button" class = "btn" onclick="News.php">News</button>
                                                                </td>
                                                        </tr>

                                                </table>

                                        </td>     
                                </tr>
                        </table>
                        <form action = "logout.php">
                        <input type = "submit" name="submit" class = "btn" value = "Log Out">
                        </form>   <?php                                
                }
        }
        else
        {
                header("Location:login.php");
        }

}
else
{
header("Location:login.php");
}
}
 
?>

</body>
</html>