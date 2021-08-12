// show error message when username or password is empty
$(document).ready(function(){
    $('#login_btn').click(function() {
        if ($('#username_input').val() == '' || $('#password_input').val() == '') {
            alert('Username and password cannot be empty.');
        }
    });
});

// change content of iframe when selecting storey
$(document).ready(function(){
    $('option').click(function() {
        $src = $(this).attr("class");
        $('iframe').attr("src", $src);
    });
});
