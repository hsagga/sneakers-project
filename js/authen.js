function login() {
    var error = "user cannot be blank!"
    var usr = document.getElementById("username");
    var pwd = document.getElementById("password");

    // security check 
    if (usr.value == " " | usr.value == null ) {
        return document.getElementById("result").value = error;
    }

    // loop thro database looking for the user

    // return default
    return document.getElementById("result").value = usr.value + pwd.value;
}