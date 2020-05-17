<?php 

//if (isset($_POST['name']) && isset($_POST['link']) && isset($_POST['date'])) {
    // Obtain all date
    $name = $_POST['name'];
    $link = $_POST['link'];
    $date = $_POST['date'];

    // Heroku Postgres credentials
    $host = "ec2-52-71-55-81.compute-1.amazonaws.com";
    $dbname = "d7n9b1n1v1sh20";
    $username = "ujebccinfaqukt";
    $password = "5bc5f1199e72b3a45bcd320fad11fcd5464ac989651150d10681d498fa65ff08";
    $port = "5432";
    
    // Create SQLi object
    $mysqli = new mysqli($host, $username, $password, $dbname, $port);
    /*
    if ($mysqli->connect_error) {
        echo "<p style='color:red;'>Connection to database failed. Error number: $mysqli->connect_errno</p>";
        die("Connection failed");
    }*/
    echo "<p style='color:green;'>Successful</p>";
//}

?>