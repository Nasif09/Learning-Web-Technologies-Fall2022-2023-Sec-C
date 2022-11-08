<?php
session_start();
if(isset($_SESSION['password'])){
    echo $_SESSION['password'];
    unset($_SESSION['password']);
}
?>
<head>
    <title>Change Password</title>
</head>
<body>
    <table border="1" width="100%" height="100%">
        <tr>
            <td>
                <center>
                    <form action="Changepassvalidator.php" method="post">
                        <table>
                            <tr>
                                <td>
                                    <fieldset>
                                        <legend><b>Change Password</b></legend>
                                        <table>
                                            <tr>
                                                <td>Username/ID</td>
                                                <td>
                                                    :<input type="text" name="username" value="" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>New Password</td>
                                                <td>
                                                    :<input type="number" name="newpass" value="" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>retype New Password</td>
                                                <td>
                                                    :<input type="number" name="retypenewpass" value="" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><hr /></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><br /></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="submit" name="" value="Submit" />
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
    </table>
</body>
</html>

