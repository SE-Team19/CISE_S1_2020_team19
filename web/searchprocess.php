<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <!-- Stylesheet : Does this work? -->
        <script src="css/style.css"></script>

        <!--Importing the CSS Stylesheet for design/visuals-->
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <!-- Sort Table JS -->
        <script src="js/sortTable.js"></script>
        <style> /* overrides Bootstrap CSS style made in multiple locations */
			h1 {
				color: #333333;
				text-shadow: 2px 2px 0px #FFFFFF, 5px 4px 0px rgba(0,0,0,0.15);
			}
		</style>
        <title>SEER</title>
    </head>

    <body>
        <header>	<!-- container for navbar -->
            <nav class="navbar">
                <ul>
                    <li><a href="submitform.php">Submit Article</a></li>
                    <li><a href="analyst.php">Journal Queue</a></li>
                    <li><a href="user_account.php">My Account</a></li>
                </ul>
            </nav>
        </header>

        <div class="seer_title_container">
            <h1 class="seer_home">SEER</h1>
        </div>

        <div class="container">
            <h3 class="hr_title"> Search Results</h3>
            <hr>
            <br>
            <table class="table-striped" id="articleTable">
                <thead>
                    <tr>
                        <th>Title <i class="arrow down" onclick="sortTable('sort_Title',0)" id="sort_Title"></i></th>
                        <th>Subject <i class="arrow down" onclick="sortTable('sort_Subject',1)" id="sort_Subject"></i></th>
                        <th>Author <i class="arrow down" onclick="sortTable('sort_Author',2)" id="sort_Author"></i></th>
                        <th>Description <i class="arrow down" onclick="sortTable('sort_Description',3)" id="sort_Description"></i></th>
                        <th>Date <i class="arrow down" onclick="sortTable('sort_Date',4)" id="sort_Date"></i></th>
                    </tr>
                </thead>
                <tbody>

                
            <?php
                $subject = $_POST['subject']; // Subject
                $today = date('Y-m-d');
                $date_from = $_POST['date_from'];
                $date_to = $_POST['date_to'];
                $date_sql = "";
                if ($date_from != "" && $date_to != "") { // Both dates are set
                    $date_sql = " AND date BETWEEN '$date_from' AND '$date_to'";
                } else if ($date_from != "") { // Only date from is set
                    $date_sql = " AND date BETWEEN '$date_from' AND '$today'";
                } else if ($date_to != "") { // Only date_to is set
                    $date_sql = " AND date BETWEEN '1990-01-01' AND '$date_to'";
                }
                $opt_first = $_POST['opt_first'];
                $opt_second = $_POST['opt_second'];
                echo $opt_first[0];
                echo $opt_second[0];

                $conn = pg_connect(getenv("DATABASE_URL"));
                $sql = sprintf("SELECT * FROM articles
                    WHERE subject ILIKE '$subject%'" . 
                    $date_sql ."AND description ILIKE '%%%s%%'
                    AND description ILIKE '%%%s%%';", $opt_first[0], $opt_second[0]); // $opt_first $opt_second
                $result = pg_query($sql);
                $row = pg_fetch_assoc($result);
                while ($row) {
                    echo "<tr>";
                    echo "<td>".$row['title']."</td>";
                    echo "<td>".$row['subject']."</td>";
                    echo "<td>".$row['author']."</td>";
                    echo "<td>".$row['description']."</td>";
                    echo "<td>".$row['date']."</td>";
                    echo "</tr>";
                    $row = pg_fetch_assoc($result);
                }
                pg_close($conn);
                //echo "Sorry, this page is currently under maintenance.";
                //echo '<br>';
                //echo '<br>';
                //echo '<button><a href="search.php">Return to Search</a></button>';
            ?>

                </tbody>
            </table>
        </div>
        <footer class="footer">
        <div id="footer">
            <div id="footer_text">&nbsp &copy Copyright ENSE Team19, 2020 &nbsp </div>
            </div>
        </footer>  
    </body>
</html>