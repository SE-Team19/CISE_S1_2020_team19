/**
 * Submit the form for review
 * @param {*} e - Event object
 */
function submit(e) {
    e.preventDefault();
    // Create XHR object
    var xhttp = new XMLHttpRequest();
    var name = form.getElementsByTagName("input")[0].value;
    var email = form.getElementsByTagName("input")[1].value;
    // Submission fields
    var title = form.getElementsByTagName("input")[2].value;
    var author = form.getElementsByTagName("input")[3].value;
    var date = form.getElementsByTagName("input")[4].value;
    var doi = form.getElementsByTagName("input")[5].value;
    var description = form.getElementsByTagName("textarea")[0].value;
    // Convert to JSON
    var obj = { "name":name,
                "email":email,
                "title":title,
                "author":author,
                "date":date,
                "doi":doi,
                "description":description }
    var json = JSON.stringify(obj);

    xhttp.open("POST", "submitprocess.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            // Replace container elements with a successful message
            container.innerHTML = this.responseText;
        }
    }

    xhttp.send("json="+json);
}

/**
 * Creates a new form
 */
function newArticle() {
    container.innerHTML = `<!-- Submitter details (initial page) -->
    <h3 class="hr_title"> New Article</h3>
    <hr>
    <!-- send form to self for now: in future, send to submitprocess.php -->
    <form id="seer-form">
            Name:<input class="namebar" type="text" name="name" 
            pattern="[a-zA-Z]{1,}" title="Name must only contains only letters" required>
                <br>
            Email: <input class="emailbar" type="text" name="email" 
            pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="Email must be email@something.something" required>
        <br>
        <br>
        <div id="analyst_journal_table_container">
        <div id="analyst_journal_container">
            <div id="analyst_journal_left_container">
                <div id="analyst_journal_info_container">
                    <label class="analyst_label">Title: </label>
                        <br>
                    <input type="text" name="title" class="analyst_input" value="" >
                        <br>
                    <label class="analyst_label">Author: </label>
                        <br>
                    <input type="text" name="author" class="analyst_input" value="">
                        <br>
                    <label class="analyst_label">Date: </label>
                        <br>
                    <input type="text" name="year" class="analyst_input" value="">
                        <br>
                    <label class="analyst_label">DOI: </label>
                        <br>
                    <input type="text" name="doi" class="analyst_input" value="">
                        <br>
                </div>
            </div>
            <div id="analyst_journal_right_container">
            <label class="analyst_label" id="analyst_journal_label">Description</label>
            <br>
            <textarea name="description" rows="9" cols="48" class="analyst_input">
            </textarea>    
            </div>
        </div>
        <input type="submit" id="analyst_button">
        <button id="analyst_button" onclick="reset()">Reset</button>
        <br>
    </div>
    </form>`;
    // Re-add the event listener
    form = document.getElementById("seer-form");
    // Add event listener to prevent form from being submitted
    form.addEventListener("submit", submit);
}

function reset() {
    form.getElementsByTagName("input")[0].value = "";
    form.getElementsByTagName("input")[1].value = "";
    // Submission fields
    form.getElementsByTagName("input")[2].value = "";
    form.getElementsByTagName("input")[3].value = "";
    form.getElementsByTagName("input")[4].value = "";
    form.getElementsByTagName("input")[5].value = "";
    form.getElementsByTagName("textarea")[0].value = "";
}
// container and form variables
var container = document.getElementById("form-container");
var form = document.getElementById("seer-form");
// Add event listener to prevent form from being submitted
form.addEventListener("submit", submit);