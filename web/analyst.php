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
                    <li><a href="moderator.php">Moderator Queue</a></li>
                    <li><a href="analyst.php">Analyst Queue</a></li>
                    <li><a href="admin.php">Admin</a></li>
                    <li><a href="user_account.php">My Account</a></li>
                </ul>
            </nav>
        </header>

            <div class="seer_title_container">
                <h1 style="text-align:center;" class="seer_home" onclick="window.location.href='searchform.php'">SEER</h1>
            </div>

            <div class="container">
            
                <h3 class="hr_title"> Analyst Queue</h3>
                <hr>
                <br>
                <!-- have a tabbed panel (current journal / journal queue) -->
                <div id="analyst_journal_table_container">
                    <div id="analyst_journal_container">
                        <div id="analyst_journal_left_container">
                            <div id="analyst_journal_info_container">
                                <label class="analyst_label">Title: </label>
                                    <br>
                                <input type="text" name="title" class="analyst_input" value="" readonly>
                                    <br>
                                <label class="analyst_label">Author: </label>
                                    <br>
                                <input type="text" name="author" class="analyst_input" value="" readonly>
                                    <br>
                                <label class="analyst_label">Date: </label>
                                    <br>
                                <input type="text" name="year" class="analyst_input" value="" readonly>
                                    <br>
                                <label class="analyst_label">DOI: </label>
                                    <br>
                                <input type="text" name="doi" class="analyst_input" value="" readonly>
                                    <br>
                            </div>
                        </div>
                        <div id="analyst_journal_right_container">
                            <label class="analyst_label" id="analyst_journal_label">Description: </label>
                            <br>
                            <textarea name="description" rows="9" cols="48" class="analyst_input" readonly>
                            </textarea>
                        </div>
                    </div>
                    <button id="analyst_button">Get submission</button>
                    <button id="analyst_button">Clear submission</button>
                    <br><br>
                    <button id="analyst_button">Approve</button>
                    <button id="analyst_button">Reject</button>
                </div>
            </div>
        </div>
        <footer class="footer">
        <div id="footer">
            <div id="footer_text">&nbsp &copy Copyright ENSE Team19, 2020 &nbsp </div>
            </div>
        </footer>
    </body>
</html>