<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="js/searchform.js"></script>
        <style>
			h1 { color: #333333; text-shadow: 2px 2px 0px #FFFFFF, 5px 4px 0px rgba(0,0,0,0.15); }
		</style>
        <title>SEER</title>
    </head>
    <body>
        <header>
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
            <h1 class="seer_home" style="text-align: center;" onclick="window.location.href='searchform.php'">SEER</h1>
        </div>
        <div id="form_wrapper">
            <h4>
                Search
            </h4>
            <hr>
            <div id="form">
                <form action="searchprocess.php" method="POST">
                    <label>Subject</label>
                    <input type="text" name="subject" id="subject_input" required><br>
                    <label>Date from</label>
                    <input type="date" name="date_from" id="date_from">
                    <label id="date_to_label">Date to</label>
                    <input type="date" name="date_to" id="date_to"><br>
                    
                    <div id="parent">
                        <label id="left"></label>                    
                        <fieldset>   
                            <label id="if_label" style="display: inline-block; margin-top: .5rem !important;">
                                If
                            </label>
                            <select name="opt_first">
                                <option value="method">Method</option>
                                <option value="benefit">Benefit</option>
                                <option value="participants">Participants</option>
                                <option value="best_practise">Best practise</option>
                                <option value="advantage">Advantage</option>
                                <option value="subject">Subject</option>
                            </select>   
                            <select name="opt_condition">
                                <option value=contains>contains</option>
                                <option value=is_equal_to>is equal to</option>
                                <option value="and">and</option>
                                <option value="or">or</option>
                                <option value="not">not</option>
                                <option value="and_or">and or</option>
                                <option value="and_not">and not</option>
                                <option value="or_not">or not</option>
                            </select>
                            <select name="opt_second">
                                <option value="tdd">TDD</option>
                                <option value="performance">Performance</option>
                                <option value="practitioner">Practitioner</option>
                                <option value="scrum">Scrum</option>
                                <option value="agile">Agile</option>
                                <option value="testing">Testing</option>
                                <option value="deployment">Deployment</option>
                                <option value="automation">Automation</option>
                                <option value="requirements">Requirements</option>
                                <option value="feedback">Feedback</option>
                                <option value="language">Language</option>
                                <option value="iteration">Iteration</option>
                                <option value="efficiency">Efficiency</option>
                                <option value="error">Error</option>
                            </select>
                            <button type="button"  id="add_button" onClick="add()">+</button>
                            <button type="button" id="remove_button" onClick="remove()">-</button>
                        </fieldset>
                        <label id="right"></label><br>
                    </div> 

                </div>
            </form> 
        </div>      
    </body>

    <!-- Footer -->
    <div class="footer_container">
        <footer>
            <a href="about.html">About this website</a>
        </footer>
    </div>
</html>