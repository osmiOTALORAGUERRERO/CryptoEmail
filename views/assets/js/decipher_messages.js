$('documet').ready(function () {
    $('#v-pills-inbox, #v-pills-outbox').on('click', 'button', function(e){
        console.log($(this))
        let id = $(this).attr('id')
        var password = $(`#inputPassword${id}`).val()
        let message_cryptogram = $(`#message-text${id}`).val()
        let message = decode(message_cryptogram.split(' '), password)
        if(message.succes){
            if (!isNaN(parseInt(password))) {
                $(`#message-text${id}`).text(message.message)
            } else {
                alert('La contraseña solo debe contener numeros');
            }
        }else{
            alert('Hubo un problema con la contraseña')
            console.log(message)
        }
        e.preventDefault();
    })
})