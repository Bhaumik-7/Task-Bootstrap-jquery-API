<html>
<body>
    <?php
        $connection = mysql_connect("localhost", "root", ""); 
        $db = mysql_select_db("sign", $connection);
        $sql = "SELECT name FROM registration ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
        }
    } else {
        echo "0 results";
    }

$conn->close(); 
    ?>
</body>
</html>