<?php inherits('admin.layouts.app'); ?>

<?php startblock('title') ?>

<?php echo 'Account || '.$user['name'].' || '.title(); ?>

<?php endblock() ?>

<?php startblock('content') ?>

<div class="card">
  <div class="card-header">
    <?php echo $user['name'] ?>
  </div>
  <div class="card-body">

    <!-- Alerts -->
    <?php append('admin.layouts.alerts'); ?> 

    <p><strong>Userame:</strong> <?php echo $user['username']; ?></p>
    <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
    <a class="btn btn-warning" href="<?php echo route('admin/user/edit') ?>"><span class="oi oi-pencil pr-2"></span>Edit Details</a>
    <a class="btn btn-warning" href="<?php echo route('admin/user/edit/password') ?>"><span class="oi oi-pencil pr-2"></span>Edit Password</a>
  </div>
</div>

<?php endblock() ?>