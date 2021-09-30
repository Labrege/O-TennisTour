$(document).ready(function(){
// Wait for the DOM to be ready
    $(function() {
        // Initialize form validation on the registration form.
        // It has the name attribute "registration"
        $(".form-indiv-booking").validate({
        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            clientname: "required",
            clientsurname: "required",
            clienttel: "required",
            // Specify that email should be validated
            // by the built-in "email" rule
            clientmail: "required"
        },
        // Specify validation error messages
        messages: {
            clientname: "Veuillez entrer votre prénom",
            clientsurname: "Veuillez entrer votre nom",
            clienttel: "Veuillez remplir votre numéro",
            clientmail: "Veuillez entrer votre adresse mail"
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit();
        }
        });
    });
});