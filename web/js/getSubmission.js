/**
 * Global variables for getting form data
 */


/**
 * Get the first occurring submission from the database
 * @param {String} type - The anaylst or moderator
 */
function getSubmission(type) {
    var xhttp = new XMLHttpRequest(); // Create XHR object
    var title = document.getElementById("title");
    var author = document.getElementById("author");
    var date = document.getElementById("year");
    var doi = document.getElementById("doi");
    var description = document.getElementById("description");
    xhttp.open("POST", "process_submission.php", true); // Use POST method
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var obj = JSON.parse(this.responseText);
            // Alert the user if there are no pending reviews
            if (obj.title != null) {
                title.value = obj.title;
                author.value = obj.author;
                date.value = obj.date;
                doi.value = obj.doi;
                description.value = obj.description;
            } else {
                alert("No pending submissions");
            }
        }
    }
    xhttp.send("type="+type);
}
/**
 * Submits the article to another queue from processing
 * @param {String} type - The analyst, moderator or submitter
 */
function approve(type) {
    var xhttp = new XMLHttpRequest();
    var title = document.getElementById("title");
    xhttp.open("POST", "process_submission.php", true); // Use POST method
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
        }
    }
    // Alert the user if there is no data in the form
    // Don't send the request
    if (title.value == "") {
        alert("No data in form");
    } else {
        xhttp.send("type="+type+"&submit="+title.value);
    }          
}
/**
 * Clear submission of the moderator page
 */
function clearSubmission() {
    var title = document.getElementById("title");
    var author = document.getElementById("author");
    var date = document.getElementById("year");
    var doi = document.getElementById("doi");
    var description = document.getElementById("description");
    title.value = "";
    author.value = "";
    date.value = "";
    doi.value = "";
    description.value = "";
}