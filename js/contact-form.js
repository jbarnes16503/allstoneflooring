$('#contactForm').submit(function(ev) {
    ev.preventDefault();
    submitContactForm();
    updateContactMessage();
});

function submitContactForm() {
    var contactName = $("#contact-name").val();
    var contactEmail = $("#contact-email").val();
    var contactSubject = $("#contact-subject").val();
    var contactMessage = $("#contact-message").val();
    
    $.post( "php/contact-form.php", { name: contactName, email: contactEmail, subject: contactSubject, message: contactMessage } );
    $('#contactForm')[0].reset();
}

function updateContactMessage() {
    var paragraph = $( "#contact-success-message" );
    paragraph.text('Thank you. Your query has been sent successfully.');
}