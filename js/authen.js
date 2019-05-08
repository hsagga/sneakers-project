var attempt = 3;

function login() {
    var usr = document.getElementById("username").value;
    var pwd = document.getElementById("password").value;

    // security check 
    // loop thro database looking for the user !!!
    if (usr == "blah" && pwd == "123") {
        alert("Login Successfully");
        window.location = "success.html";
        return false;
    } else {
        attempt--;
        alert("you have left " + attempt + " attempts");
        if (attempt == 0) {
            document.getElementById("username").disabled = true;
            document.getElementById("password").disabled = true;
            document.getElementById("submit").disabled = true;
            return false;
        }
    }

    // return default
    return document.getElementById("result").value = usr.value + pwd.value;
}