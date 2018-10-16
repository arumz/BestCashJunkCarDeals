
$('#frm').validate({    
    rules: {
         phone: {
            required: true,
            phoneUS: true
            }
        },
        messages: {
              phone: {
                required: "This field is required.",
                phoneUS: "Please add a valid phone number."
              }
        },
        success: function(label) {  
            $(label).addClass("valid");
        }
}); //form validates on submit