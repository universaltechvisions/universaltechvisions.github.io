function getCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else
    {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
        end = dc.length;
        }
    }

    return decodeURI(dc.substring(begin + prefix.length, end));
} 

function doSomething() {
    var myCookie = getCookie("uniCount");

    if (myCookie == null) {
        document.getElementById("account").src = "https://www.geeksforgeeks.org/";
    }
    else {
        document.getElementById("account").src = "https://www.geeksforgeeks.org/";

    }
}
