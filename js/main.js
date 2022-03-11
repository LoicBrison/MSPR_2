function showPwd() {
    var x = document.getElementById("passwd");
    if (x.type == "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function onLogin(token) {
    console.log(document.getElementById("loginForm"));
    document.getElementById("loginForm").submit();
}