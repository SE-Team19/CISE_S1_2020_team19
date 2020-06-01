function getSubmission() {
    var xhttp = new XMLHttpRequest(); // Create XHR object
    var title = document.getElementsByTagName("title");
    var author = document.getElementsByTagName("author");
    var year = document.getElementsByTagName("year");
    var doi = document.getElementsByTagName("doi");
    xhttp.open("GET", "moderator_get_submission.php"); // GET is fine for retrieving
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var obj = JSON.parse(this.responseText);
            console.log(obj);
        }
    }
    xhttp.send();
}