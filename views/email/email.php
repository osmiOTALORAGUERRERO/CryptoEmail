<?php require_once "views/assets/header.php"?> 
<div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-inbox-tab" data-toggle="pill" href="#v-pills-inbox" role="tab" aria-controls="v-pills-inbox" aria-selected="true">Inbox</a>
      <a class="nav-link" id="v-pills-outbox-tab" data-toggle="pill" href="#v-pills-outbox" role="tab" aria-controls="v-pills-outbox" aria-selected="false">Outbox</a>
      <a class="nav-link" id="v-pills-write-tab" data-toggle="pill" href="#v-pills-write" role="tab" aria-controls="v-pills-write" aria-selected="false">Write</a>
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-inbox" role="tabpanel" aria-labelledby="v-pills-inbox-tab">
        <?php require "views/email/messages_template.php"?>
      </div>
      <div class="tab-pane fade" id="v-pills-outbox" role="tabpanel" aria-labelledby="v-pills-outbox-tab">
        <?php require "views/email/messages_template.php"?>
      </div>
      <div class="tab-pane fade" id="v-pills-write" role="tabpanel" aria-labelledby="v-pills-write-tab">
        <?php require_once "views/email/write.php"?>        
      </div>
    </div>
  </div>
</div>

<?php require_once "views/assets/foot.php"?> 