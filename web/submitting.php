<?php 

if (isset($_POST['name']) && isset($_POST['link']) && isset($_POST['date'])) {
    // Obtain all date
    $name = $_POST['name'];
    $link = $_POST['link'];
    $date = $_POST['date'];

    // Heroku Postgres credentials
    //$host = "ec2-52-71-55-81.compute-1.amazonaws.com";
    //$dbname = "d7n9b1n1v1sh20test";
    //$username = "ujebccinfaqukttest";
    //$password = "5bc5f1199e72b3a45bcd320fad11fcd5464ac989651150d10681d498fa65ff08";
    
    // Connect using pgsql
    $conn = pg_connect(getenv("DATABASE_URL"));
    
    if ($conn == false) {
        echo "<p style='color:red;'>Connection to database failed. Error number: $conn->pg_last_error</p>";
        die();
    }
    //echo "<p style='color:green;'>Successful</p>";

    $sql = "CREATE TABLE testing (
            ID INT PRIMARY KEY)";
    if (pg_query($conn, $sql) == false) {
        echo pg_last_error();
    }

}

?>