<?php
    session_start();
    if(isset($_SESSION["regValid"])){
        echo $_SESSION["regValid"];
        unset($_SESSION["regValid"]);
    }
?>
<html>
<head>
    <title>Registration</title>
</head>
<body>
    <table border="1" width="100%" height="100%">
        <tr>
            <td>
                <center>
                    <table height="100%" width="100%">
                        <tr>
                            <td><h1><i>Mini Project</i></h1></td>
                            <td align="right">
                                <a href="../index.php">Home</a> |
                                <a href="login.php">Login</a> |
                                <a href="registration.php">Registration</a>
                            </td>
                        </tr>
                    </table>
                </center>
            </td>
        </tr>
        <tr>
            <td>
                <center>
                    <table>
                        <tr>
                            <td>
                                <fieldset>
                                    <legend>Login</legend>
                                    <form method="post" action="loginVal.php" >
                                        <table>
                                            <tr>
                                                <td colspan="2"><br></td>
                                            </tr>
                                            <tr>
                                                <td>Username</td>
                                                <td>
                                                    :<input type="text" name="name" value="" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td>
                                                    :<input type="password" name="pass" value="" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <input type="submit" name="" value="Register" />
                                                    <a href="login.php">Login</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                </fieldset> 
                            </td>
                        </tr>
                    </table>
                </center>
            </td>
        </tr>
    </table>
</body>
</html>
