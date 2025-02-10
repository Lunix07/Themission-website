$(document).ready(function() {
    (function($) {
        "use strict";

        // Validate contactForm
        $('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                subject: {
                    required: true,
                    minlength: 4
                },
                number: {
                    required: true,
                    minlength: 5
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 20
                }
            },
            messages: {
                name: {
                    required: "Come on, you have a name, don't you?",
                    minlength: "Your name must consist of at least 2 characters"
                },
                subject: {
                    required: "Come on, you have a subject, don't you?",
                    minlength: "Your subject must consist of at least 4 characters"
                },
                number: {
                    required: "Come on, you have a number, don't you?",
                    minlength: "Your Number must consist of at least 5 characters"
                },
                email: {
                    required: "No email, no message"
                },
                message: {
                    required: "Um... yeah, you have to write something to send this form.",
                    minlength: "That's all? Really?"
                }
            },

            // Submit handler
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type: "POST",
                    url: "contact.php", // Make sure this points to your PHP file
                    data: $(form).serialize(),
                    success: function(response) {
                        if (response.status === "success") {
                            // Show success message
                            $('#success').fadeIn();
                            $('#contactForm :input').attr('disabled', 'disabled');
                            $('#contactForm').fadeTo("slow", 1, function() {
                                $(this).find(':input').attr('disabled', 'disabled');
                                $(this).find('label').css('cursor', 'default');
                                $('.modal').modal('hide');
                                $('#success').modal('show');
                            });
                        } else {
                            // Show error message
                            $('#error').fadeIn();
                            $('.modal').modal('hide');
                            $('#error').modal('show');
                        }
                    },
                    error: function() {
                        // Show error message on failure
                        $('#error').fadeIn();
                        $('.modal').modal('hide');
                        $('#error').modal('show');
                    }
                });
            }
        });
    })(jQuery);
});
