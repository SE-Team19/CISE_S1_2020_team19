function getSubmission() {
    var xhttp = new XMLHttpRequest(); // Create XHR object
    var title = document.getElementById("title");
    var author = document.getElementById("author");
    var date = document.getElementById("year");
    var doi = document.getElementById("doi");
    var description = document.getElementById("description");
    xhttp.open("GET", "moderator_get_submission.php"); // GET is fine for retrieving
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var obj = JSON.parse(this.responseText);
            // Remove the readonly attribute to make the value editable
            //title.removeAttribute("readonly");
            //author.removeAttribute("readonly");
            //date.removeAttribute("readonly");
            //doi.removeAttribute("readonly");
            //description.removeAttribute("readonly");
            // Insert the details
            title.value = obj.title;
            author.value = obj.author;
            date.value = obj.date;
            doi.value = obj.doi;
            description.value = obj.description;
            console.log(obj.title);
            // Add readonly attribute back
            //title.setAttribute("readonly");
            //author.setAttribute("readonly");
            //date.setAttribute("readonly");
            //doi.setAttribute("readonly");
            //description.setAttribute("readonly");
            }
    }
    xhttp.send();
}