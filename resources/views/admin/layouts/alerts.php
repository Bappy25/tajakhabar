<?php 
  $alerts = Base\Request::getFlash();
  if(!empty((array) $alerts)){
    foreach($alerts as $key=>$value){
      ?>
      <div class="alert alert-<?php echo $key; ?> alert-dismissible"> 
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <?php echo $value; ?>
      </div>
      <?php                            
    }
  } 
?>