

<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>
        My_WebPage
</title>
</head>

<body>
<marquee class = "marquee" bgcolor =  #663300>Welcome</marquee>
<?Php
if(isset($_REQUEST['submit']))
{
        session_start();
        session_unset();
        session_destroy();
        echo "<h1>You have Successfully Logged Out Click on the button to go to the Home page";?>
        <form action = "home.php"  >
        <table>
        <tr style="height:35px;font-size:20px;">
        <td align="center"><input type = "submit" name="submit" class = "btn" value = "Go Home"></td></table>
        </form><?php
}
else
{
header("Location:login.php");
}
?>

</body>
</html>