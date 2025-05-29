document.getElementById('username').addEventListener('blur', function (){
    let username = document.getElementById("username").value.trim();

    if (username == "") {
        document.getElementById('table1').innerHTML = "";
        return;
    }

    let json = { 'username': username };
    let data = JSON.stringify(json);

    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../Controller/usernameAjax.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('json=' + data);

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let response = this.responseText.trim();

            if (response === "taken") {
                document.getElementById('table1').style.color = "red";
                document.getElementById('table1').innerHTML = "Username already taken.";
            } else if (response === "available") {
                document.getElementById('table1').style.color = "green";
                document.getElementById('table1').innerHTML = "Username is available!";
            } else {
                document.getElementById('table1').style.color = "orange";
                document.getElementById('table1').innerHTML = "Error checking username.";
            }
        }
    }
});
