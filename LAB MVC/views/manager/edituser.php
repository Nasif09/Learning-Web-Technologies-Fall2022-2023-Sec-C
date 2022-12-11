<?php

    session_start();
    require_once('../models/userModel.php');

    $uid = $_GET['uid'];
    $_SESSION['uid']=$uid;
    $un = $_GET['un'];
    $pass = $_GET['pass'];
    $fn = $_GET['fn'];
    $mn = $_GET['mn'];
    $occ = $_GET['occ'];
    $dob = $_GET['dob'];
    $paddress = $_GET['paddress'];
    $branch = $_GET['branch'];
    $room = $_GET['room'];
    $furniture = $_GET['furniture'];

?>
<html>
    <head>
        <title>Add User</title>
    </head>
    <body>
        <table border="4" width="100%" height="100%">
            <tr>
                <td>
                    <table height="100%" width="100%">
                        <tr height="70px">
                            <td>
                                <a href="managerdashboard.php"><h2><i>Smart Hostel</i></h2></a>
                            </td>
                            <td align="right"> <h4>Welcome,</h4></td>
                            <td align="right">
                                <a href="../logout.php"><img src="../image/logout-icon.jpg" width="35" height="35" align="center"></a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td width="30%">
                                <form method="post" action="../../controllers/manager/managersection.php">
                                    <fieldset>
                                        <table>
                                            <tr align="left">
                                                <td><input type="radio" name="mngOpt" value="usermanagement" />User Management</td>
                                                <td>
                                                    <select name="usermanagement">
                                                        <option value="adduser">Add User</option>
                                                        <option value="searchuser">Search User</option>
                                                        <option value="users">Users</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            
                                            <tr align="left">
                                                <td><input type="radio" name="mngOpt" value="employeemanagement" />Employee Management</td>
                                                <td>
                                                    <select name="employeemanagement">
                                                        <option value="addemployee">Add Employee</option>
                                                        <option value="searchemployee">Search Employee</option>
                                                        <option value="employees">Employees</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr align="left">
                                                <td><input type="radio" name="mngOpt" value="facilityAndServices" />Facility & Services</td>
                                                <td>
                                                    <select name="facilityAndServices">
                                                        <option value="addfacility">Add Facility</option>
                                                        <option value="facilities">Facilities</option>
                                                        <option value="updatefacility">Update Facility</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr align="left">
                                                <td><input type="radio" name="mngOpt" value="room" />Room</td>
                                                <td>
                                                    <select name="room">
                                                        <option value="addroom">Add Room</option>
                                                        <option value="roomdetails">Room Details</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr align="left">
                                                <td><input type="radio" name="mngOpt" value="accounts" />Accounts</td>
                                                <td>
                                                    <select name="accounts">
                                                        <option value="payslip">Pay Slip</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr align="left">
                                                <td><input type="radio" name="mngOpt" value="" />Others</td>
                                                <td>
                                                    <select name="others">
                                                        <option value="contactbox">Contact Box</option>
                                                        <option value="complainbox">Complain Box</option>
                                                        <option value="leaveapplication">Leave Application</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td align="center" colspan="2">
                                                    <input type="submit" name="" value="Continue..." />
                                                    <input type="reset" name="" value="Reset" />
                                                </td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                </form>
                            </td>
                            <td align="center">
                                <form method="post" action="../../controllers/manager/edituserValidator.php">
                                    <fieldset>
                                        <legend>Add User</legend>
                                        <table>
                                            <tr>
                                                <td>Name</td>
                                                <td>:<input type="text" value="<?php echo "$un" ?>" name="username" /></td>
                                            </tr>
                                            <tr>
                                                <td>Fathername</td>
                                                <td>:<input type="text" value="<?php echo "$fn" ?>"  name="fathername" /></td>
                                            </tr>
                                            <tr>
                                                <td>Mothername</td>
                                                <td>:<input type="text" value="<?php echo "$mn" ?>"  name="mothername" /></td>
                                            </tr>
                                            <tr>
                                                <td>Occupation</td>
                                                <td>:<input type="text" value="<?php echo "$occ" ?>"  name="occupation" /></td>
                                            </tr>
                                            <tr>
                                                <td>Date of Birth</td>
                                                <td>:<input type="date" value="<?php echo "$dob" ?>"  name="dob" /></td>
                                            </tr>
                                            <tr>
                                                <td>Parmanentaddress</td>
                                                <td>:<input type="text" value="<?php echo "$paddress" ?>"  name="parmanentaddress" /></td>
                                            </tr>
                                            <tr>
                                                <td>Branch</td>
                                                <td>:
                                                    <select name="branch">
                                                        <option value="">Branch 01</option>
                                                        <option value="">Branch 02</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Room</td>
                                                <td>:<input type="text" value="<?php echo "$room" ?>"  name="room" /></td>
                                            </tr>
                                            <tr>
                                                <td>Furniture</td>
                                                <td>:<input type="text" value="<?php echo "$furniture" ?>"   name="furniture" /></td>
                                            </tr>    
                                            <tr>
                                                <td align="center" colspan="2"><input type="submit" name="insert" value="Save Change" ></td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                </form>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>
<?php
if($_POST['insert']){
    // $username = $_POST['username'];
    // $password = $_POST['password'];
    // $occupation= $_POST['occupation'];
    // $fathername = $_POST['fathername'];
    // $mothername = $_POST['mothername'];
    // $parmanentaddress = $_POST['parmanentaddress'];
    // $dob = $_POST['dob'];
    // $room = $_POST['room'];
    // $furniture = $_POST['furniture'];
    // $branch = $_POST['branch'];
header('location: edituserValidator.php');

}

?>