

<html>
<head>
<link rel="stylesheet" href="styles.css">
        <title>
                My_WebPage
        </title>
</head>
<body>
<marquee class = "marquee" bgcolor = #663300>Welcome To Almighty CompAIDs</marquee>
<br><br><br>
        <table align="center" class = "signuptable">
                <tr>
                        <td>
                                <form action = "newuser.php" method = "POST">
                                        <table>
                                                <tr>
                                                        <td colspan ="2" style="height:35px;font-size:35;px;text-align:center;"><b>New User</td>
                                                </tr>
                                                <tr style="height:35px;font-size:20px;">
                                                        <td><b>First Name </td><td><input type = "text" name = "fname" required>
                                                </tr>
                                                <tr style="height:35px;font-size:20px;">
                                                        <td><b>Last Name </td><td><input type = "text" name = "lname" required>
                                                                
                                                </tr>
                                                <tr style="height:35px;font-size:20px;">
                                                        <td><b>Email </td><td><input type = "text" name = "email" required>
                                                </tr >
                                                <tr style="height:35px;font-size:20px;">
                                                        <td><b>School Id </td><td><input type = "text" name = "user" required>
                                                </tr>
                                                <tr style="height:35px;font-size:20px;">
                                                        <td><b>PIN </td><td><input type = "password" name = "password" required>
                                                </tr>
                                                 <tr style="height:35px;font-size:20px;">
                                                        <td><b>Confirm PIN </td><td><input type = "password" name = "password" required>
                                                    </tr>
                                                     <tr style="height:35px;font-size:20px;">
                                                        <td colspan ="2" align="center"><input type = "submit" name="submit" class = "btn" value = "Sign Up"></td>
                                                        </tr>
                                                        <div>
                                                   
                                                       </div>
                                                  

                                                   </table>
                                                 
                                                <p> Already a user? <a href="login.php"><b>Log In</b></a></p>
                                               <div>
                                              <div text-align:right">
                                              <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                                           <small>&copy; Almighty CompAIDs</small>
                                       </div>
                                </form>
                        </td>
                </tr>

        </table>

</body>

</html>