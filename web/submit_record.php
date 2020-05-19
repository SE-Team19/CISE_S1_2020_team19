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

        <div id="container_sr">
            <!-- TODO -->
            <?php if (!empty($_POST)): ?>
                Thank you, <?php echo htmlspecialchars($_POST["name"]); ?>!
                <br>
                <!-- connect to db > save article (to moderator queue) > if successful > show article + email confirmation -->
                Your submission is now in stage 2.
                <br>
                <br>
                <!-- image of steps (s1: submit > s2: moderation > posted to SEER) -->
                Step 1: Submit ---> Step 2: Moderation ---> Step 3: Posted to SEER
                <br>
                <br>
                A confirmation email has been sent to <?php echo htmlspecialchars($_POST["email"]); ?>.
                <br>
                <input class="button" type="button" value="Home" onclick="window.location.href='index.php'">
                <input class="button" type="button" value="New Article" onclick="window.location.href='submit_record.php'">
                <input class="button" type="button" value="Search" onclick="window.location.href='database_search_queries.php'">
            <?php else: ?>
                <!-- Submitter details -->
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    Name:<input 
                        type="text" 
                        name="name" 
                        pattern="[a-zA-Z]{1,}" 
                        title="Name must only contains only letters"
                        required>
                    <br>
                    Email: <input 
                        type="text" 
                        name="email" 
                        pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" 
                        title="Email must be email@something.something"
                        required>
                    <br>
                    <input class="button" type="button" value="Back" onclick="window.location.href='index.php'">
                    <input class="button" type="submit">
                </form>
            <?php endif; ?>
        </div>

        <!-- Footer -->
        <footer class="footer fixed-bottom" style="background-color: #b8f4b8;"> <!-- container for page footer -->
			<div class="container" style="padding:8px 6px;">
				<a href="about.html" id="float-right">About this website</a>
			</div>
		</footer>
    </body>
</html>