    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        $('document').ready(function () {
            $('#v-pills-tab a').on('click', function (e) {
                e.preventDefault()
                $(this).tab('show')
                let active_pill = $(this).attr('id')
                if(active_pill === 'v-pills-inbox-tab'){
                    return $('#v-pills-inbox').inbox()
                }else if(active_pill === 'v-pills-outbox-tab') {
                    return $('#v-pills-outbox').outbox()
                }else if(active_pill === 'v-pills-write-tab') {
                    return $('#v-pills-write').write()
                }
            })
        })
    </script>
    <script>
        $('#writeModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input').val(recipient)
        })
        $('#exampleModal').on('show.bs.modal', function (event) {
            var modal = $(this)
            modal.find('.modal-body textarea').val('')
        })
        </script>
        <script src="views/assets/js/pill_active.js"></script>
</body>
</html>