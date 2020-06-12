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
                    <li><a href="submitform.html">Submit Article</a></li>
                    <li><a href="moderator.html">Moderator Queue</a></li>
                    <li><a href="analyst.html">Analyst Queue</a></li>
                    <li><a href="admin.php">Admin</a></li>
                    <li><a href="user_account.php">My Account</a></li>
                </ul>
            </nav>
        </header>

        <div class="seer_title_container">
            <h1 style="text-align:center; class="seer_home" onclick="window.location.href='searchform.html'">SEER</h1>
        </div>

        <div class="container">
            <h3 class="hr_title"> Administrator</h3>
            <hr>
            <br>
            
            <div id="user_search_container">
                <form>
                    <div id="user_search_input_container">
                        <label id="user_input_label">Username:</label>
                        <input class="searchbar" id="user_search" type="text" name="name" placeholder="">
                    </div>
                    <div id="user_role_select_container">
                        <label id="user_role_label">User Role (Optional): </label>
                        <select id="select_user_role" name="user_role_menu">
                            <option value="empty">-</option>
                            <option value="standard">User</option>
                            <option value="moderator">Moderator</option>
                            <option value="analyst">Analyst</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <br>
                    <br>
                    <button id="analyst_button">Update Role</button>
                    <button id="analyst_button">Delete User</button>
                    <br>
                </form>
            </div>
        </div>
    </body>
    <footer class="footer_admin">
    <div id="footer">
            <div id="footer_text">&nbsp &copy Copyright ENSE Team19, 2020 &nbsp </div>
            </div>
    </footer>
</html>