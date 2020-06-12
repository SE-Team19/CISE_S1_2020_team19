//create XMLHttpRequest object
var xhr; //create global variable
function createRequest() {
    xhr = false;
    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
    }
    else if (window.ActiveXObject) {
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    return xhr;
}

function sendEmail(name, email){
    
        var xhr = createRequest();
        if (xhr){
            xhr.open("POST", "email.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    
            var requestbody = "name=" + encodeURIComponent(name) + "&email=" + encodeURIComponent(email);
    
            xhr.onreadystatechange = processResponse;
    
            xhr.send(requestbody);
        }
    }

function processResponse(){
    if (xhr.readyState == 4 && xhr.status == 200) {
        window.alert(xhr.responseText);
    }
}