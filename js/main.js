function showPwd() {
    var x = $("#passwd");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function onLogin(token) {
    $("#loginForm").submit();
}