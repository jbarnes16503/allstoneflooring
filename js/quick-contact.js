$('#quick-contact').submit(function(ev) {
    ev.preventDefault();
    submitQuickContactForm();
});

function submitQuickContactForm() {
    var name = $("#quick-contact-name-field").val();
    var phone = $("#quick-contact-phone-field").val();
    $.post( "php/quick-contact.php", { quickphone: phone, quickname: name } );
    $('#quick-contact')[0].reset();
}