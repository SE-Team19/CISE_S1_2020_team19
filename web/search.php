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
                    <li><a href="moderator.php">Journal Queue</a></li>
                    <li><a href="analyst.php">Journal Queue</a></li>
                    <li><a href="user_account.php">My Account</a></li>
                </ul>
            </nav>
        </header>

        <div class="seer_title_container">
            <h1 class="seer_home" onclick="window.location.href='search.php'">SEER</h1>
        </div>

        <div class="container">
            
            <?php if (!empty($_POST)): ?>
                <h3 class="hr_title"> Search</h3>
                <hr>
                <br>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <input 
                        class="searchbar"
                        type="text" 
                        name="search"
                        placeholder="Search for articles" 
                        pattern="[a-zA-Z0-9 ]{1,}" 
                        title="Name must only contains only letters"
                        required>
                    <input class="button" id="search_btn" type="submit" value="Search">
                </form>
                <br>
                Your search for '<?php echo htmlspecialchars($_POST["search"]); ?>' found 0 results.
                <br>
            <?php else: ?>
                <div class="searchbar_container">
                <h3 class="hr_title"> Search</h3>
                <hr>
                <br>
                <!-- form needs to be changed: action="searchprocess.php" -->
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <input 
                        class="searchbar"
                        type="text" 
                        name="search"
                        placeholder="Search for articles" 
                        pattern="[a-zA-Z0-9 ]{1,}" 
                        title="Can contain letters, numbers and spaces"
                        required>
                    <input class="button" id="search_btn" type="submit" value="Search">
                </form>
            <?php endif; ?>
            </div>
        </div>
    </body>
    <!-- Footer -->
    <div class="footer_container">
        <footer>
            <a href="about.html">About this website</a>
        </footer>
    </div>
</html>