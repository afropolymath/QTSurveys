
<div class="iconic">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3>Notice</h3>
    </div>
  <div class="modal-body">

    <?php

      foreach($messages as $message){
        echo '<h3>'.$message.'</h3>';
      }

    ?>
  </div>
  <div class="modal-footer">
   <a type="button" class="close_modal btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</a>
  </div>
</div>