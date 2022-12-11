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
                                                <td><input type="radio" name="mngOpt" value="others" />Others</td>
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
                                <form method="post" action="../../controllers/manager/addfacilityValidator.php">
                                    <fieldset>
                                        <legend>Add Facility</legend>
                                        <table>
                                            <tr>
                                                <td>Name</td>
                                                <td>:<input type="text" name="name" /></td>
                                            </tr>
                                            <tr>
                                                <td>Cost</td>
                                                <td>:<input type="text" name="price" /></td>
                                            </tr>
                                            <tr>
                                                <td>Availability</td>
                                                <td>:<input type="checkbox" name="availability" /></td>
                                            </tr>  
                                            <tr>
                                                <td align="center" colspan="2"><input type="submit" name="insert" value="Insert" ></td>
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