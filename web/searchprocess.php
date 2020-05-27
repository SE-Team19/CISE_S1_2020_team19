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
            <table class="table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Subject</th>
                        <th>Author</th>
                    </tr>
                </thead>
                <tbody>

                
            <?php
                $subject = $_POST['subject'];
                $conn = pg_connect(getenv("DATABASE_URL"));
                $sql = "SELECT * FROM articles
                        WHERE subject LIKE '$subject%'";
                $result = pg_query($sql);
                $row = pg_fetch_assoc($result);
                while ($row) {
                    echo "<tr>";
                    echo "<td>".$row['title']."</td>";
                    echo "<td>".$row['subject']."</td>";
                    echo "<td>".$row['author']."</td>";
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
    </body>
    <!-- Footer -->
    <div class="footer_container">
        <footer>
            <a href="about.html">About this website</a>
        </footer>
    </div>
</html>