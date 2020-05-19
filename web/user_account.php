<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <!-- Stylesheet : THIS DID NOT WORK (see below for correct referencing) -->
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
        <header>	<!-- container for page navbar -->
            <nav class="navbar navbar-light" style="background-color: #a6f1a6;">
                <div class="container">
                    <h1>Welcome to SEER</h1>
                </div>
            </nav>
        </header>

        <div class="container_account">
            <h3 class="">Account</h3>
            <hr>
            <h5>User Name</h5>
            <br>
            <br>
            <p>Articles submitted: * row# where article accepted=true</p>
            <br>
            <h5>Article history</h5>
            <hr>
            <p>Table: rows of article submissions (with article accepted column)</p>
            <p>Table: rows of article submissions (with article accepted column)</p>
            <p>Table: rows of article submissions (with article accepted column)</p>
            <p>Table: rows of article submissions (with article accepted column)</p>
            <p>Table: rows of article submissions (with article accepted column)</p>
            <p>Table: rows of article submissions (with article accepted column)</p>
            <br>
            <br>
            <input class="button" id="account_btn" type="button" value="Home" onclick="window.location.href='index.php'">
        </div>
        <!-- Footer -->
        <footer class="footer fixed-bottom" style="background-color: #b8f4b8;"> <!-- container for page footer -->
			<div class="container" style="padding:8px 6px;">
				<a href="about.html" id="float-right">About this website</a>
			</div>
		</footer>
    </body>
</html>