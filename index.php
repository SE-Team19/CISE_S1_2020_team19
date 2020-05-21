<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Stylesheet -->
    <script src="css/style.css"></script>

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
                <h1>Analyst Submission</h1>
            </div>
        </nav>
    </header>
    <div class="container"><br>
        <h6 id="title">Submit details to SEER</h6>
        <form class="needs-validation" method="post" id="contact_form" novalidate>
            <div class="row">
                <div class="col">
                    <label class="form-label">
                        <b>Main Details</b><br>
                        Article
                    </label>
                    <input type="text" name="first_name" class="form-control" maxlength="40" pattern="[A-Za-z0-9,.!? ]*" required>
                </div>
                <div class="col">
                    <label class="form-label"><br>
                        Author
                    </label>
                    <input type="text" name="last_name" class="form-control" maxlength="40" pattern="[A-Za-z0-9,.!? ]*" required>
                </div>
                <!-- new line -->
                <div class="w-100"></div>
                <div class="col">
                    <label class="form-label">
                        Title
                    </label>
                    <input type="text" name="phone" class="form-control" required maxlength="30" pattern="[A-Za-z0-9,.!? ]*" required>
                </div>
                <div class="col"></div>	<!-- blank column -->
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <label class="form-label">
                        <b>Details2</b><br>
                        AAA
                    </label>
                    <input type="text" name="unit" class="form-control w-50 " maxlength="20" pattern="[A-Za-z0-9,.!? ]*">
                    <input type="hidden" name="unit" value="-1"> <!-- sends value=-1 incase form input is empty -->
                </div>
                <div class="col">
                    <label class="form-label"><br>
                        BBB
                    </label>
                    <input type="text" name="street_number" class="form-control w-50 " maxlength="20" pattern="[A-Za-z0-9,.!? ]*" required>
                </div>
                <!-- new line -->
                <div class="w-100"></div>
                <div class="col">
                    <label class="form-label">
                        CCC
                    </label>
                    <input type="text" name="street" class="form-control" maxlength="50" pattern="[A-Za-z0-9,.!? ]*" required>
                </div>
                <div class="col">
                    <label class="form-label">
                        DDD
                    </label>
                    <input type="text" name="suburb" class="form-control" maxlength="50" pattern="[A-Za-z0-9,.!? ]*" required>
                </div>
                <!-- new line -->
                <div class="w-100"></div>
                <div class="col">
                    <label class="form-label">
                        DDD
                    </label>
                    <input class="form-control w-50" value="Auckland" pattern="[A-Za-z0-9,.!? ]*"required>
                </div>
                <div class="col"></div>	<!-- blank column -->
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <label class="form-label">
                        <b>Details3</b><br>
                        Date
                    </label>
                    <input id="input_date" type="date" name="date" class="form-control w-50" required>
                    <div id="date_error" class="invalid-feedback"></div>
                </div>
                <div class="col">
                    <label class="form-label"><br>
                        Time
                    </label>
                    <input id="input_time" type="time" name="time" class="form-control w-50" value="12:00" required>
                    <div id="time_error" class="invalid-feedback"></div>
                </div>
                <div class="w-100"></div><br>
                <!-- new line -->
                <div class="col col-form-label"></div>	<!-- blank column -->
                <div class="col col-form-label">
                    <input type="buttom" class="btn btn-primary btn-default" onClick="validateDateTime('bookingprocess.php', date.value, time.value)" value="submit">

                    <button type="reset" class="btn btn-secondary btn-default" value="reset" id="post-button2">Reset</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
