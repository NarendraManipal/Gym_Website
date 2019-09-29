function showPassword()
{
    var passwd = document.getElementById("showpassword");
    if (passwd.type === "password") {
        passwd.type = "text";
    }
    else {
        passwd.type = "password";
    }
}