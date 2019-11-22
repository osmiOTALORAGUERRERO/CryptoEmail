$('document').ready(function () {
    jQuery.fn.extend({
        inbox: function () {
            // console.clear()
            console.log($(this).attr('id'))
            $.ajax({
                type: 'POST',
                url: 'api/received_messages.php',
                dataType: 'json'
            }).done(function(messages) {
                console.log(messages)
                $('#v-pills-inbox').empty();
                if (messages.length > 0) {
                    let count = 1
                    for (const message of messages) {
                        let $content = $(`<div class="shadow p-3 mb-5 bg-white rounded">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="staticEmail${count}" class="sr-only">Email</label>
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail${count}" value="${message.email}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword${count}" class="sr-only">Password</label>
                                <input type="password" class="form-control" id="inputPassword${count}" placeholder="Password">
                            </div>
                            <div class="form-group col-md-4">
                                <button type="button" id="${count}" class="btn btn-primary mb-2">Decode</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea readonly class="form-control" id="message-text${count++}">${message.message}</textarea>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="idEmisor" value="${message.transmitter}">
                            <input type="hidden" name="idReceptor" value="${message.receiver}">
                        </div>
                    </div>`)
                    $content.appendTo('#v-pills-inbox')
                    }
                } else {
                    $(this).html(`<div class="shadow p-3 mb-5 bg-white rounded">
                    <h2>No tienes correos</h2>
                    </div>`)
                }
            }).fail(function () {
                console.log({error:'error'})
            })
        },
        outbox: function () {
            console.clear()
            console.log($(this).attr('id'))
            $.ajax({
                type: 'POST',
                url: 'api/sent_messages.php',
                dataType: 'json'
            }).done(function(messages) {
                console.log(messages)
                $('#v-pills-outbox').empty();
                if (messages.length > 0) {
                    let count = 1
                    for (const message of messages) {
                        let $content = $(`<div class="shadow p-3 mb-5 bg-white rounded">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="staticEmail${count}" class="sr-only">Email</label>
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail${count}" value="${message.email}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword${count}" class="sr-only">Password</label>
                                <input type="password" class="form-control" id="inputPassword${count}" placeholder="Password">
                            </div>
                            <div class="form-group col-md-4">
                                <button type="submit" id="${count}" class="btn btn-primary mb-2">Decode</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea readonly class="form-control" id="message-text${count++}">${message.message}</textarea>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="idEmisor" value="${message.transmitter}">
                            <input type="hidden" name="idReceptor" value="${message.receiver}">
                        </div>
                    </div>`)
                    $content.appendTo('#v-pills-outbox')
                    }
                } else {
                    $(this).html(`<div class="shadow p-3 mb-5 bg-white rounded">
                    <h2>No tienes correos</h2>
                    </div>`)
                }
            }).fail(function () {
                console.log({error:'error'})
            })
        },
        write: function () {
            console.log($(this).attr('id'))
        }
    })

    $('#v-pills-inbox').inbox()
})   