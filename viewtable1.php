<html>
    <head>
        <title>List of KL Restaurant</title>
    </head>
    <body>
        <center>
        <h1>List of KL Restaurant</h1>
            <!--create table structure using HTML first-->
            <table border="1">
            <tr>
            <th>Restaurant ID</th>
            <th>Restaurant Name</th>
            <th>Address</th>
            <th>Phone</th>
            </tr>
            <tr>
            <td>0</td>
            <td>Subway Restaurant</td>
            <td>Menara Standard Chartered, TPM</td>
            <td>03-22441234</td>
            </tr>
                
            <?php
                $serverName = "https://simplewebtp046245.azurewebsites.net";
                $connectionOptions = array(
                                     "Database" => "simpleweb",
                                     "Uid" => "chinkean023",
                                     "PWD" => "War.a.lew@023");
                $conn = sqlsrv_connect($serverName, $connectionOptions);
                if (!$conn)
                {
                        die("Error connection: ".sqlsrv_errors());
                 } 
                else
                {
                    echo "<script>alert('Success)';</script>";
            ?>
                
            </table>
        </center>
    </body>
</html> 
