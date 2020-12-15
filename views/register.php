<?php $this->title= 'Register'; ?>
<h1>Create An Account</h1>
<?php  $form=\app\core\form\Form::begin('',"post") ?>
<?= $form->field($model,'firstname') ?>
<?= $form->field($model,'lastname') ?>
<?= $form->field($model,'email') ?>
<?= $form->field($model,'password')->passwordField() ?>
<?= $form->field($model,'confirmpassword')->passwordField() ?>

<button type="submit" class="btn btn-primary">Submit</button>
<?php  $form=\app\core\form\Form::end() ?>

<!-- <form method="post" action="">
  <div class="mb-3">
    <label  class="form-label">First name</label>
    <input type="text" name="firstname" value="<?=$model->firstname?>" 
    class="form-control<?= $model->hasError('firstname')? ' is-invalid':''?>">
    <div class="invalid-feedback">
      <?= $model->getFirstError('firstname')?>
    </div>
  </div>
  <div class="mb-3">
    <label  class="form-label">last name</label>
    <input type="text" name="lastname" class="form-control">
  </div>
  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" name="email" class="form-control">
  </div>
  <div class="mb-3">
    <label  class="form-label">Passowrd</label>
    <input type="password" name="password" class="form-control">
  </div>
  <div class="mb-3">
    <label  class="form-label">Passowrd</label>
    <input type="password" name="confirmpassword" class="form-control">
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form> -->