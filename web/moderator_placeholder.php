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
                <h1 style="text-align:center; class="seer_home" onclick="window.location.href='searchform.php'">SEER</h1>
            </div>

            <div class="container">
            
                <h3 class="hr_title"> Moderator Queue</h3>
                <hr>
                <br>
                <div id="analyst_input_container">
                    <label>Title: </label>
                    <input type="text" name="title" id="title"><br>
                    <label>Author: </label>
                    <input type="text" name="author" id="author"><br>
                    <label>Date: </label>
                    <input type="text" name="date" id="date"><br><br>
                </div>
                <br>
                <table id="table">
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Date</th>
                    </tr>
                    <tr>
                        <td>Journal One is the One</td>
                        <td>Zane Denize</td>
                        <td>01/01/2020</td>
                    </tr>
                    <tr>
                        <td>Journal Two is a Hoot</td>
                        <td>Alexander Denize</td>
                        <td>01/01/2020</td>
                    </tr>
                    <tr>
                        <td>Journal Three Yeet Yeet</td>
                        <td>Denize Zane</td>
                        <td>01/04/2020</td>
                    </tr>
                    <tr>
                        <td>Journal Four What a Bore</td>
                        <td>Denize Alexander</td>
                        <td>01/05/2020</td>
                    </tr>
                    <tr>
                        <td>Journal Five I'm Alive</td>
                        <td>Zane Alexander</td>
                        <td>02/01/2020</td>
                    </tr>
                    <tr>
                        <td>Journal Six Netflix</td>
                        <td>Alexander Zane</td>
                        <td>02/02/2020</td>
                    </tr>
                </table>

                <script>
                    var table = document.getElementById('table'),rIndex;

                    for(var i = 1; i < table.rows.length; i++)
                    {
                        table.rows[i].onclick = function()
                        {
                            document.getElementById("title").value = this.cells[0].innerHTML;
                            document.getElementById("author").value = this.cells[1].innerHTML;
                            document.getElementById("date").value = this.cells[2].innerHTML;
                        }
                    }
                </script>
            </div>
        </div>
        <footer class="footer">
        <div id="footer">
            <div id="footer_text">&nbsp &copy Copyright ENSE Team19, 2020 &nbsp </div>
            </div>
        </footer>
    </body>
</html>