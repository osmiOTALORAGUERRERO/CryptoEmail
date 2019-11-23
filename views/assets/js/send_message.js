
$('document').ready(function () {
    $( "#send-message" ).on('click',function( event ) {
        event.preventDefault();
        $('form .form-control')
        //console.log($('form .form-control'))
       //console.log($('form ').serialize() + "&type_request=write" )
      let email = $('email').val()
      let password = $('password-text').val()
      let message_code= code($('#message-text').val(), password)
        $.ajax({
            type: 'POST',
            url: 'api/write_new_message.php',
            dataType: 'json',
            data: {email:email, message: message_code, type_request:'write'}
        }).done(function(data) {
            console.log(data)
            if (data.succes) {
                alert("el mensaje ha sido enviado")
            } else{
                alert("no se pudo enviar el mensaje ")
            }
        }).fail(function () {
            console.log({error:'error'})
        })
      });
      
})