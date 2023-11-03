$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");


    // validate contactForm form
    $(function() {
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
                    minlength: 10
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 1
                },
                exp: {
                    required: false
                },
                job: {
                    required: true
                }
            },
            messages: {
                name: {
                    required: "come on, you have a name, don't you?",
                    minlength: "your name must consist of at least 2 characters"
                },
                subject: {
                    required: "come on, you have a subject, don't you?",
                    minlength: "your subject must consist of at least 4 characters"
                },
                number: {
                    required: "come on, you have a number, don't you?",
                    minlength: "your Number must consist of at least 10 characters"
                },
                email: {
                    required: "no email, no message"
                },
                message: {
                    required: "um...yea, you have to write something to send this form.",
                    minlength: "thats all? really?"
                },
                job: {
                    required: "which position you are aplying for?"
                }
            },
            submitHandler: function(form) {
                return false;
                // alert($('#job').val());
            //     $(form).submit();
            //     // $(form).ajaxSubmit({
            //     //     type:"POST",
            //     //     data: $(form).serialize(),
            //     //     url:"send_email",
            //     //     success: function(data) {
            //     //         $('#contactForm :input').attr('disabled', 'disabled');
            //     //         $('#contactForm').fadeTo( "slow", 1, function() {
            //     //             $(this).find(':input').attr('disabled', 'disabled');
            //     //             $(this).find('label').css('cursor','default');
            //     //             $('#success').fadeIn()
            //     //             $('.modal').modal('hide');
		          //     //   	$('#success').modal('show');
            //     //    //      })
            //     //     },
            //     //     error: function(data) {
            //     //         $('#contactForm').fadeTo( "slow", 1, function() {
            //     //             $('#error').fadeIn()
            //     //             $('.modal').modal('hide');
		          //     //   	$('#error').modal('show');
            //     //         })
            //     //     }
            //     // })
            }
        })
    })
        
 })(jQuery)
})