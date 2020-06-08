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

function setDate() {
    var today = new Date();
    var current_day = today.getDate();
    var current_year = today.getFullYear();
    var current_month = today.getMonth()+1; //gives 5 not 05 for May

    if (current_month < 10){
        current_month = "0" + current_month; //add leading 0 if necessary
    }

    if (current_day < 10){
        current_day = "0" + current_day; //add leading 0 if necessary
    }

    var previous_year = current_year -2;
    if (previous_year < 10){
        previous_year = "0" + previous_year; //add leading 0 if necessary
    }
    var previous_date = previous_year + "-" + current_month + "-" + current_day;
    var todays_date = current_year + "-" + current_month + "-" + current_day;
    document.getElementById("date_from").setAttribute("max", todays_date);
    document.getElementById("date_from").setAttribute("value", previous_date);

    document.getElementById("date_to").setAttribute("value", todays_date);
    document.getElementById("date_to").setAttribute("max", todays_date);
}

var body = document.getElementsByTagName("body")[0];
body.addEventListener("onload", setDate);