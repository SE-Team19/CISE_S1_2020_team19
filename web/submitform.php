<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

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
                    <li><a href="moderator.php">Moderator Queue</a></li>
                    <li><a href="analyst.php">Analyst Queue</a></li>
                    <li><a href="admin.php">Admin</a></li>
                    <li><a href="user_account.php">My Account</a></li>
                </ul>
            </nav>
        </header>

        <div class="seer_title_container">
            <h1 class="seer_home" onclick="window.location.href='searchform.php'">SEER</h1>
        </div>

        <div class="container">
            <!-- submitprocess.php -->
            <?php if (!empty($_POST)): ?>
                <h3 class="hr_title"> Submit Article</h3>
                <hr>
                <br>
                Thank you, <?php echo htmlspecialchars($_POST["name"]); ?>!
                <br>
                <br>
                <!-- connect to db > save article (to moderator queue(table)) > if successful > show article + email confirmation -->
                Your submission has been received and is now in Stage 2.
                <br>
                <br>
                <br>
                <!-- image of steps (s1: submit > s2: moderation > posted to SEER) -->
                Stage 1: Submit ---> Stage 2: Moderation ---> Stage 3: Posted to SEER
                <br>
                <br>
                <br>
                A confirmation email has been sent to <?php echo htmlspecialchars($_POST["email"]); ?>.
                <br>
                <br>
                <input class="button" id="home_btn" type="button" value="Seach" onclick="window.location.href='searchform.php'">
                <input class="button" id="newarticle_btn" type="button" value="New Article" onclick="window.location.href='submitform.php'">
                <input class="button" id="search_btn" type="button" value="Search" onclick="window.location.href='submitprocess.php'">
            <?php else: ?>
                <!-- Submitter details (initial page) -->
                <h3 class="hr_title"> New Article</h3>
                <hr>
                <!-- send form to self for now: in future, send to submitprocess.php -->
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div id="user_submit_info_container">
                        Name:<input class="namebar" type="text" name="name" 
                        pattern="[a-zA-Z]{1,}" title="Name must only contains only letters" required>
                            <br>
                        Email: <input class="emailbar" type="text" name="email" 
                        pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="Email must be email@something.something" required>
                    </div>
                    <div id="submit_journal_container">
                        <div id="submit_journal_left_container">
                            <label class="submit_label">Title: </label>
                                <br>
                            <!-- undecided on wether to keep the placeholder or the value (only want one) -->
                            <input type="text" name="title" class="submit_input" placeholder="Journal Title">
                                <br>
                            <label class="submit_label">Author: </label>
                                <br>
                            <input type="text" name="author" class="submit_input" placeholder="Journal Author">
                                <br>
                            <label class="submit_label">Year: </label>
                                <br>
                            <input type="text" name="date" class="submit_input" placeholder="Journal Year" >
                                <br>
                            <label class="submit_label">Doi: </label>
                                <br>
                            <input type="text" name="date" class="submit_input" placeholder="Journal DOI">
                        </div>
                        <div id="submit_journal_right_container">
                            <label class="submit_label" id="submit_journal_label">Journal: </label>
                                <br>
                            <input type="text" name="journal" class="submit_input" placeholder="Journal Content">
                        </div>
                    </div>
                    <input class="button" id="home_btn" type="button" value="Back" onclick="window.location.href='searchform.php'">
                    <input class="button" id="submit_btn" type="submit">
                </form>
            <?php endif; ?>
        </div>
    </body>
    <!-- Footer -->
    <div class="footer_container">
        <footer>
            <a href="about.html">About this website</a>
        </footer>
    </div>
</html>