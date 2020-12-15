<?php
/** @var $this \app\core\view */
use \app\core\form\TextareaField;
$this->title =' Contact'; ?>

<?php $form = \app\core\form\Form::begin('','post') ?>
<?php echo $form->field($model,'subject') ?>
<?php echo $form->field($model,'email') ?>
<?php echo new TextareaField($model,'body'); ?>
<button type="submit" class="btn btn-primary">Submit</button>

<?php $form = \app\core\form\Form::end() ?>

<!-- <form method="post" action="">
  <div class="mb-3">
    <label  class="form-label">Subject</label>
    <input type="text" name="subject" class="form-control">
  </div>
  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" name="email" class="form-control">
  </div>
  <div class="mb-3">
    <label  class="form-label">Body</label>
    <input type="text" name="body" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->