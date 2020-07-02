<?php inherits('admin.layouts.app'); ?>

<?php startblock('title') ?>

<?php echo 'Items || '.$item['name'].' || '.title(); ?>

<?php endblock() ?>

<?php startblock('content') ?>

<div class="card">
  <div class="card-header">
    <?php echo $item['name'] ?>
  </div>
  <div class="card-body">
    <!-- Alerts -->
    <?php append('admin.layouts.alerts'); ?> 
    <p><strong>Item Name:</strong> <?php echo $item['name']; ?></p>
    <p><strong>Item Price:</strong> <?php echo $item['price']; ?>/=</p>
    <form method="post" action="<?php echo route('admin/items/delete') ?>" onsubmit="return confirm('Do you really want to delete this item?');">
      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
      <input type="hidden" value="<?php echo $item['id']; ?>" name="id">
      <a class="btn btn-primary" href="<?php echo route('admin/items/all') ?>"><span class="oi oi-list pr-2"></span>All Items</a>
      <a class="btn btn-warning" href="<?php echo route('admin/items/edit', ['id' => $item['id']]) ?>"><span class="oi oi-pencil pr-2"></span>Edit Item</a>
      <button class="btn btn-danger" type="submit"><span class="oi oi-trash"></span> Delete Item</button>
    </form>
  </div>
</div>

<?php endblock() ?>