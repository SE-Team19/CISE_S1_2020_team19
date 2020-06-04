/**
 * Submit the form for review
 * @param {*} e - Event object
 */
function submit(e) {
    e.preventDefault();
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
    console.log(json);
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

var form = document.getElementById("seer-form");
form.addEventListener("submit", submit);