
<div class="modal fade" id="writeModal" tabindex="-1" role="dialog" aria-labelledby="writeModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="writeModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form >
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" name="email-for" id="email" readonly>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text" name="message"></textarea>
          </div>
          <div class="form-group">
            <label for="password-text" class="col-form-label">password:</label>
            <input type="number" class="form-control" id="password-text" name="password"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="send-message">Send message</button>
      </div>
    </div>
  </div>
</div>