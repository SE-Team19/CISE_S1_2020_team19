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
            <h1 class="seer_home" onclick="window.location.href='searchform.php'">SEER</h1>
        </div>

        <div class="container" id="searchform_container">
            <!-- add action to form: run searchprocess.php -->
            <form action="searchprocess.php" method="POST">
                <!-- description block -->
                <div id="description_container">
                    <div id="description_label_container">
                        <label id="description_label">Description: </label>
                    </div>
                    <div id="description_input_container">
                        <input class="input" id="description_input" type="text" name="description" pattern="" title="Journal description">
                    </div>
                </div>
                <!-- date block -->
                <div id="date_container">
                    <div id="date_label_container">
                        <label id="date_label1">Date range: </label>
                    </div>
                    <div id="date_range_container">
                        <div class="date_label_container">
                            <label id="date_label2">from</label>
                        </div>
                        <div class="date_input_container">
                            <input class="date_input" type="date" name="date_from">
                            
                        </div>
                        <div class="date_label_container">
                            <label id="date_label3">to</label>
                        </div>
                        <div class="date_input_container" id="date_input_container">

                            <input class="date_input" type="date" name="date_to">
                        </div>
                    </div>
                </div>
                <!-- condition block -->
                <div id="condition_container">
                    <div id="condition_label_container">
                        <label id="condition_label">If: </label>
                    </div>
                    <div class="condition_select_container">
                        <select class="select_field" name="select_1">
                            <option value="field1">Field Name 1</option>
                            <option value="field2">Field Name 2</option>
                            <option value="field3">Field Name 3</option>
                            <option value="field4">Field Name 4</option>
                        </select>
                    </div>
                    <div class="condition_select_container">
                        <select class="select_field" name="select_2">
                            <option value="field1">Field Name 1</option>
                            <option value="field2">Field Name 2</option>
                            <option value="field3">Field Name 3</option>
                            <option value="field4">Field Name 4</option>
                        </select>
                    </div>
                    <div class="condition_select_container">
                        <select class="select_field" name="select_3">
                            <option value="field1">Field Name 1</option>
                            <option value="field2">Field Name 2</option>
                            <option value="field3">Field Name 3</option>
                            <option value="field4">Field Name 4</option>
                        </select>
                    </div>
                    <div class="search_btn_container" id="search_btn_container">
                        <button class="search_btn" id="remove_btn" type="button" onclick="">-</button>
                        <button class="search_btn" id="add_btn" type="button" onclick="addBlock()">+</button>
                    </div>
                    <script>
                        function addBlock()
                        {
                            // hide new buttons that are added with clone
                            //document.getElementById("remove_btn").style.display = "none";
                            //document.getElementById("add_btn").style.display = "none";

                            // assign condition_container and all it's children to a variable
                            var create_div = document.getElementById('condition_container');
                            // clone the contents of the above variable into a new variable
                            var clone_div = create_div.cloneNode(true);
                            // assign parent container to a variable
                            var insert_container = document.getElementById('add_condition_block');
                            // add elements to container
                            insert_container.appendChild(clone_div);
                        }
                        /*
                        function showButtons()
                        {
                            // show original buttons
                            document.getElementById("remove_btn").style.display = "inline";
                            document.getElementById("add_btn").style.display = "inline";
                        }
                        */
                        /*function removeBlock()
                        {
                            // assign parent container for child to be removed, as the variable value
                            var locate_parent = document.getElementById('add_condition_block');
                            // assign child container to be removed, as the variable value
                            var remove_container = document.getElementById('condition_container');
                            // remove child element from parent container
                            //locate_parent.removeChild(remove_container);
                        }
                        function showChildren() 
                        {
                            var ccc = document.getElementById("add_condition_block");

                            var c = document.body.children;
                            var txt = "";
                            var i;
                            for (i = 0; i < ccc.length; i++) 
                            {
                                txt = txt + ccc[i].tagName + "<br>";
                            }

                            document.getElementById("add_condition_block").innerHTML = txt;
                            
                            document.getElementById("add_condition_block").innerHTML = ccc;
                        }*/
                    </script>
                </div>
                <div id="add_condition_block">
                    <!-- insert function here -->
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