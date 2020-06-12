let counter = 1;

function add(){
    if (counter < 3){
        var parent = document.getElementById("parent");
        NodeList.prototype.forEach = Array.prototype.forEach;
        var children = parent.childNodes;
        let i=0;
        children.forEach(function(item){
            
            if (i < 3){
                var cln =item.cloneNode(true);
                console.log(i + " : " + cln.nodeName);
                parent.appendChild(cln);  
                i++;
            }
        })
        
        counter++;
    }    
}

function remove(){
    if (counter > 1){
        var node = document.getElementById("parent");
        for (var i=0; i<3; i++){
            node.removeChild(node.lastChild);
        }

        counter--;
    }    
}

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

function sendMail(){
    var xhr = createRequest();
    if (xhr){
        xhr.open("POST", dataSource, true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        var requestbody = "first_name=" + encodeURIComponent(first_name) + "&last_name="
        + encodeURIComponent(last_name) + "&phone=" + encodeURIComponent(phone)
    ;

        xhr.onreadystatechange = processResponse;

        xhr.send(requestbody);
    }

}