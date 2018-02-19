// JavaScript Functions



function loadDocHome(category_id) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("ajax").innerHTML = this.responseText;
            
        }

    };
    xhttp.open("GET", "../controller/controller_category.php?category_id="+category_id, true);
    xhttp.send();

}


function logOut() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            location.href = "../index.php";
        }

    };
    xhttp.open("GET", "../resources/logout.php", true);    
    xhttp.send();

}


function toggleMyAccount() {
    $(".myAccountSubmenu").toggle(300);
}

function showSearchBox() {
    $(".searchBox").empty();
    $(".searchBox").append("<form action='../resources/search.php' method='post'><input class='searchBoxAppend' type='text' name='search' placeholder='Search..'></form>");
}

function alertmsg(message) {
    window.alert(message);
}

function checkOut() {
    $("#ajax").empty();
    window.alert("HOLA");
    $("#ajax").append("<h1 id='purchaseMessage'>Thank you for your purcharse!</h1> <meta http-equiv='Refresh' content='0;url=http://www.dominio.com'> ");
    
}

function locationController(page) {
    location.href=page;
}

$(document).ready( function () {
    $('form').submit( function () {
        var formdata = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "submit.php",
            data: formdata,
         });
        return false;
    });
});


