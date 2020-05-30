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
            <h1 class="seer_home" style="text-align: center;" onclick="window.location.href='searchform.php'" style="text-align:center;">SEER</h1>
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
                        <fieldset>   
                            <label id="if_label" style="display: inline-block; margin-top: .5rem !important;">
                                If
                            </label>
                            <select>
                                <option value="method" name="condition1">Method</option>
                                <option value="benefit" name="condition1">Benefit</option>
                                <option value="participants" name="condition1">Participants</option>
                                <option value="best_practise" name="condition1">Best practise</option>
                                <option value="advantage" name="condition1">Advantage</option>
                                <option value="subject" name="condition1">Subject</option>
                            </select>   
                            <select>
                                <option value=contains name="condition2">contains</option>
                                <option value=is_equal_toname="condition2">is equal to</option>
                                <option value="and"name="condition2">and</option>
                                <option value="or"name="condition2">or</option>
                                <option value="not"name="condition2">not</option>
                                <option value="and_or"name="condition2">and or</option>
                                <option value="and_not"name="condition2">and not</option>
                                <option value="or_not"name="condition2">or not</option>
                            </select>
                            <select>
                                <option value="tdd" name="condition3">TDD</option>
                                <option value="performance" name="condition3">Performance</option>
                                <option value="practitioner" name="condition3">Practitioner</option>
                                <option value="scrum" name="condition3">Scrum</option>
                                <option value="agile" name="condition3">Agile</option>
                                <option value="testing" name="condition3">Testing</option>
                                <option value="deployment" name="condition3">Deployment</option>
                                <option value="automation" name="condition3">Automation</option>
                                <option value="requirements" name="condition3">Requirements</option>
                                <option value="feedback" name="condition3">Feedback</option>
                                <option value="language" name="condition3">Language</option>
                                <option value="iteration" name="condition3">Iteration</option>
                                <option value="efficiency" name="condition3">Efficiency</option>
                                <option value="error" name="condition3">Error</option>
                            </select>
                            <button type="button"  id="add_button" onClick="add()">+</button>
                            <button type="button" id="remove_button" onClick="remove()">-</button>
                        </fieldset>
                    </div>
                    <p style="display:inline-block;">Save query</p>
                    <input type="checkbox" name="save" id="save" style="height: auto; margin: auto;">
                    <br>
                    <button type="button" value="submit" id="submit_button">Submit</button>
                    <button type="reset" value="reset" id="reset_button">Reset</button>
                </div>
            </form> 
        </div> 
        <footer class="footer">
        <div id="footer">
            <div id="footer_text">&nbsp &copy Copyright ENSE Team19, 2020 &nbsp </div>
            </div>
        </footer>   
    </body>
</html>