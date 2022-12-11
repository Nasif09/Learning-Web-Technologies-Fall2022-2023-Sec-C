
<html>
    <head>
    </head>
    <body>
        <section class="header">
            <div>
                <nav>
                <a class="logo" href="userdashboards.php"><img src="Logo.png" height="70" width="70"></a>
                <div class="nav-links">
                    <ul>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>

                </div>
                </nav>
            </div>
        </section>

        <div class="search">
            <td><input type='text' size="30" class="searchTerm" name='searchbyusername' id='searchbyid' value='' placeholder='Search..' onkeyup='ajax()' />
            <button type='submit' class="searchButton">Search</button></td>
        </div> 

        <div class="displaytable">
            <?php
            echo "
            <table border='1'>
            
            <tr>
            <td><input type='text' name='searchbyusername' id='searchbyid' value='' placeholder='Search..' onkeyup='ajax()' /></td>
            </tr> 
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>User Type</th>
            </tr>";
                $status=profile();
                while($row = mysqli_fetch_assoc($status)){
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['type']}</td>
                </tr>";
                }
            echo "</table>"
            ?>
        </div>
    </body>
</html>


<script>
    
    function ajax(){
        let searchbyid = document.getElementById('searchbyid').value;
        let xhttp = new XMLHttpRequest();

        xhttp.open('POST', '../../controllers/managersection/searchuserValidator.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send('searchbyid='+searchbyid);
        xhttp.onreadystatechange = function(){
            
            if(this.readyState == 4 && this.status == 200){
                document.getElementsByTagName('h1')[0].innerHTML = this.responseText;
            }
        }
    }              

</script>

