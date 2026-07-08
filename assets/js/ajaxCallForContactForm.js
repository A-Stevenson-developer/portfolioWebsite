$('#contactForm').on('submit', function(){
    $.ajax({
        url: '../forms/contact.php',
        dataType: 'JSON',
        method: 'POST',
        data: {
            name: $('#name').val(),
            email: $('#email').val(),
            subject: $('#subject').val(),
            message: $('#message').val()
        },
        success: function(result) {
            console.log(result);
        },
        error: function(err) {
            console.log(err);
        }
    })
})