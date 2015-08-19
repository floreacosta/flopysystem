function addToCart(str) {
    if (str == "") {
        document.getElementById("carro").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("carro").innerHTML = xmlhttp.responseText;
            }
        }
		console.log(xmlhttp.responseText);
        xmlhttp.open("GET","/include_extra/ajaxRecall.php?q="+str+"&func=1",true);
        xmlhttp.send();
    }
}

function deleteItem(str) {
    if (str == "") {
        document.getElementById("carro").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("carro").innerHTML = xmlhttp.responseText;
            }
        }
		console.log(xmlhttp.responseText);
        xmlhttp.open("GET","/include_extra/ajaxRecall.php?q="+str+"&func=2",true);
        xmlhttp.send();
    }
}