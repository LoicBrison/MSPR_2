$(document).on('click', '#submitbtn', function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: $("#loginForm").attr('action'),
        data: $("#loginForm").serialize(),
        success: function(response) {
            console.log(response);
            if (JSON.parse(response) == "success") {
                $('#loginForm').hide();
                $('#authForm').removeAttr('hidden');
            } else {
                $('#warning').html("Identifiant ou mot de passe incorrect !");
                $('#warning').html(reponse);
            }
        }
    });
});

function checkRecaptcha(){
    var response = grecaptcha.getResponse();
    if(response.length == 0) { 
        $('#g-recaptcha-error').html("Merci de compléter le reCaptcha !");
    }
    else { 
        $('#g-recaptcha-error').html("");
        $('#loginForm').append("<input id='submitbtn' type='submit' hidden></input>");
        $('#submitbtn').click();
    }
}

function showPwd() {
    var x = document.getElementById("passwd");
    if (x.type == "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
