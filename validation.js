// jQuery validation
$(document).ready(function () {

    // If name field is clicked off of
    $('#name').blur(function (e) {
        e.preventDefault()

        // Get the value from the name field
        var name = $('#name').val()
        // If the length of name is 0, add this text to the html class
        if ($.trim(name).length == 0) {
            nameError = "Please enter your name";
            $('#name-error').text(nameError)
            // If name is more than 0 chars, remove the text
        } else {
            nameError = "";
            $('#name-error').text(nameError)
        }
    });

    // If email field loses focus
    $('#email').blur(function (e) {
        e.preventDefault()

        // Get the value from the email field
        var emailRegex = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/
        var email = $('#email').val()
        // If the length of email is 0, add this text to the html class
        if ($.trim(email).length == 0) {
            emailError = "Please enter your email address";
            $('#email-error').text(emailError)
            // If the email doesn't match the regex pattern, add this text to the html class
        } else if (!(emailRegex.test(email))) {
            emailError = "Please enter a valid email address";
            $('#email-error').text(emailError)
            // If email DOES match and is longer than 0 chars, remove the text
        } else {
            emailError = "";
            $('#email-error').text(emailError)
        }
    });

    // If note field loses focus
    $('#note').blur(function (e) {
        e.preventDefault()

        // Get the value from the note field
        var note = $('#note').val()
        // If the length of note is 0, add this text to the html class
        if ($.trim(note).length == 0) {
            noteError = "Please enter a note";
            $('#note-error').text(noteError)
            // If note is more than 0 chars, remove the text
        } else {
            noteError = "";
            $('#note-error').text(noteError)
        }
    });
})