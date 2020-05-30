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

            <button id="approve" class="btn btn-primary mt-2" onclick="moveToAnalyst()">Approve</button>

            <?php
            // Connect using pgsql
            $conn = pg_connect(getenv("DATABASE_URL"));

            if ($conn == false) {
                echo "<p style='color:red;'>Connection to database failed. Error number: $conn->pg_last_error</p>";
                die();
            }
            // Select the first row in the table
            $sql = "; ";
            //$result = pg_query($conn, $sql);
            pg_close($conn);
            ?>

            <table class="table table-striped table-bordered mt-3">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Link</th>
                    <th>Date</th>
                </tr>
                <tr>
                    <th>1</th>
                    <th>Quack</th>
                    <th><a href="google.com">Google</a></th>
                    <th>Date</th>
                </tr>
                <tr>
                    <th>2</th>
                    <th>Quack 2</th>
                    <th><a href="google.com">Google</a></th>
                    <th>Date</th>
                </tr>
                <tr>
                    <th>3</th>
                    <th>Quack 3</th>
                    <th><a href="google.com">Google</a></th>
                    <th>Date</th>
                </tr>
            </table>
        </div>
        <footer class="footer">
        <div id="footer">
            <div id="footer_text">&nbsp &copy Copyright ENSE Team19, 2020 &nbsp </div>
            </div>
        </footer>
    </body>
</html>
