<!DOCTYPE html>
<!-- For moderator use -->
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <!-- BibTEX js -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/pcooksey/bibtex-js/src/bibtex_js.js"></script>
        <title>Approve article</title>
    </head>

    <body">
        <header>	<!-- container for page navbar -->
            <nav class="navbar navbar-light" style="background-color: #a6f1a6;">
                <div class="container">
                    <h1>List of articles</h1>
                </div>
            </nav>
        </header>
        <div class="container">

            <h5>To be approved</h5>
            <br>

            <bibtex src="test.bib"></bibtex>
            <!-- Customize bibtex template -->
            <div class="bibtex_template">
                <span class="author"></span>
                (<span class="year"></span>).
                <span class="title"></span>
                <span class="journal"></span>
                <br>
            </div>

            <div id="bibtex_display"></div>
            <!--<p>
                Title: Handbook of Mathematical Functions with
              Formulas, Graphs, and Mathematical Tables <br>
              Author: Milton Abramowitz and Irene A. Stegun <br>
              Publisher: Dover <br>
              Year: 1964 <br>
              Address: New York City <br>
              Edition: ninth Dover printing, tenth GPO printing <br>
            </p>-->

            <button id="approve" class="btn btn-primary mt-2" onclick="moveToAnalyst()">Approve</button>

            <?php
            // Connect using pgsql
            $conn = pg_connect(getenv("DATABASE_URL"));
    
            if ($conn == false) {
                echo "<p style='color:red;'>Connection to database failed. Error number: $conn->pg_last_error</p>";
                die();
            }
            // Select the first row in the table
            $sql = "SELECT * FROM testing
                    ORDER BY ID DESC
                    LIMIT 1;";
            $result = pg_query($conn, $sql);
            pg_close($conn);
            ?>

        </div>

        <!-- Move record to analyst queue -->
        <script>
            function moveToAnalyst() {
                var xhttp = new XMLHttpRequest(); 
                
            }
        </script>

        <!-- Footer -->
        <footer class="footer fixed-bottom" style="background-color: #b8f4b8;"> <!-- container for page footer -->
			<div class="container" style="padding:8px 6px;">
				<a href="index.php" id="float-left">Return to Home Page</a>
			</div>
		</footer>
    </body>
</html>