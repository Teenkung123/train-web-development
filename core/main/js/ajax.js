function sendAjaxRequest(method, path, async, data) {
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            xhttp.open(method, path, async);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(data);
            return xhttp.responseText();
        }
    }
    return null;
}