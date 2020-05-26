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

        <div class="seer_title_container">
            <h1 class="seer_home" onclick="window.location.href='searchform.php'">SEER</h1>
        </div>

        <div class="container">
            
            <div id="signin_container">

                <h3 id="signin_title"> Sign in</h3>
                <hr>
                <br>

                <form action="search.php">
                    <input 
                        id="username"
                        type="text" 
                        name="username"
                        placeholder="Username" 
                        pattern="[a-zA-Z0-9]{0,20}" 
                        title="Name must only contains only letters"
                        required>
                    <br>
                    <input 
                        id="password"
                        type="password" 
                        name="password"
                        placeholder="Password" 
                        pattern="[a-zA-Z0-9]{8,}" 
                        title="Name must only contains only letters"
                        required>
                    <br>
                    <input class="button" id="signin_btn" type="submit" value="Sign in" onclick="window.location.href='searchform.php'">
                </form>
            </div>
        </div>
    </body>
</html>
