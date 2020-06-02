/**
 * Get the first occurring submission from the database
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
            title.value = obj.title;
            author.value = obj.author;
            date.value = obj.date;
            doi.value = obj.doi;
            description.value = obj.description;
            console.log(obj.title);
            }
    }
    xhttp.send("type="+type);
}
/**
 * Clear submission of the moderator page
 */
function clearSubmission() {
    document.getElementById("title").value = "";
    document.getElementById("author").value = "";
    document.getElementById("year").value = "";
    document.getElementById("doi").value = "";
    document.getElementById("description").value = "";
}