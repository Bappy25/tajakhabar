<?php inherits('admin.layouts.app'); ?>

<?php startblock('title') ?>

<?php echo 'Home || '.title(); ?>

<?php endblock() ?>

<?php startblock('content') ?>

<div class="card">
  <div class="card-header">
    Dashboard
  </div>
  <div class="card-body">
    <!-- Alerts -->
    <?php append('admin.layouts.alerts'); ?> 
    <h3 class="text-center my-5 text-muted">
    	<span class="oi oi-dashboard pr-2"></span>
    	Welcome to dashboard!
    </h3>
  </div>
</div>

<?php endblock() ?>