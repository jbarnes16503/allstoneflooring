$('#quick-contact').submit(function(ev) {
    ev.preventDefault();
    submitQuickContactForm();
    updateMessage();
});

function submitQuickContactForm() {
    var name = $("#quick-contact-name-field").val();
    var phone = $("#quick-contact-phone-field").val();
    $.post( "php/quick-contact.php", { quickphone: phone, quickname: name } );
    $('#quick-contact')[0].reset();
}

function updateMessage() {
    var paragraph = $( "#quick-contact-message" );
    paragraph.text('Your details have been successfully submitted.');
}