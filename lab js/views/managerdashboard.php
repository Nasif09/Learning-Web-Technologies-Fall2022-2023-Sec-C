<html>
    <head>
        <title>Manager Dashboard</title>
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
                            <td align="right"> <h4>Welcome, Manager</h4></td>
                            <td align="right">
                                <a href="logout.php"><img src="image\logout-icon.jpg" width="35" height="35" align="center"></a>
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
                                <form method="post" action="../controllers/managersection.php">
                                    <fieldset>
                                        <table>
                                            <tr align="left">
                                                <td><input type="radio" name="mngOpt" value="usermanagement" />User Management</td>
                                                <td>
                                                    <select name="usermanagement">
                                                        <option value="adduser">Add User</option>
                                                        <option value="edituser">Edit Exixting User</option>
                                                        <option value="deleteuser">Delete Exixting User</option>
                                                        <option value="searchuser">Search User</option>
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
                                                        <option value="complainbox">Complain Box</option>
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
                                <table>
                                    <tr>
                                        <td>
                                            <fieldset>
                                                <legend>Users</legend>
                                                <h2>Number of users:
                                                </h2>
                                            </fieldset>
                                        </td>
                                        <!-- <td>
                                            <fieldset>
                                                <legend>Facilities</legend>
                                                <h2>Number of facilities:
                                                </h2>
                                            </fieldset>
                                        </td> -->
                                    </tr>
                                    <tr>
                                        <td>
                                            <fieldset>
                                                <legend>Roomes</legend>
                                                <h2>Number of roomes: 
                                                </h2>
                                            </fieldset>
                                        </td>
                                        <!-- <td>
                                            <fieldset>
                                                <legend>Rooms</legend>
                                                <h2>Number of Rooms:
                                                </h2>
                                            </fieldset>
                                        </td> -->
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>