<?php 

    if(isset($_GET['err'])){
        if($_GET['err'] == 'null'){
            echo "invalid username/password";
        }

        if($_GET['err'] == 'invalid'){
            echo "Invalid username or password. Please Check";
        }

        if($_GET['err'] == 'bad_request'){
            echo "please login first ...";
        }
    }

?>
<head>
    <title>Login</title>
</head>
<body>
    <table border="1" width="100%" height="100%">
        <tr>
            <td>
                <center>
                    <form action="loginValidator.php" method="post">
                        <table>
                            <tr>
                                <td>
                                    <fieldset>
                                        <legend><b>LOGIN</b></legend>
                                        <table>
                                            <tr>
                                                <td>UserName</td>
                                                <td>
                                                    <input type="text" name="username" value="" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td>
                                                    <input type="password" name="password" value="" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><hr /></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><input type="checkbox" name="remember" value="">Remember Me</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><br /></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="submit" name="" value="Submit" />
                                                    <a href="forgetpass.php">
                                                        Forget Password
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                </td>
                            </tr>
                        </table>
                    </form>
                </center>
            </td>
        </tr>
    </table>
</body>
</html>

