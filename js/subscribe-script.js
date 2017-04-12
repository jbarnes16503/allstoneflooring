$("#subscribe-form").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Did you fill in the form properly?");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});


function submitForm(){
    // Initiate Variables With Form Content
    var email = $("#subscribe-email").val();

    $.ajax({
        type: "POST",
        url: "php/subscribe.php",
        data: "email=" + email,
        success : function(text){
            formSuccess();
        }
    });
}

function formSuccess(){
    $("#subscribe-form")[0].reset();
    submitMSG(true, "Message has been Submitted!")
}

function formError(){
    $("#subscribe-form").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}