<?php

?>
<div class = "container">
<form class = "text-center border border-light p-5">
    <fieldset>
        <legend><?= __('Profile') ?></legend>
        <div class = "md-form">    
            <?= $this->Form->control(('email'),[
                'class' => ['form-control'],
                'value' => $session_user['email']
                ])?>
        </div>
        <div class = "md-form">
            <?= $this->Form->control(('password'),[
                'class' => ['form-control']

            ]) ?>
        </div>
        <?= $this->Form->control('role', [
            'options' => ['advisor' => 'Advisor', 'student' => 'Student'],
            'class' => ['mdb-select md-form']
        ]) ?>
   </fieldset>
<?= $this->Form->button(__('Submit'),['class' => 'btn btn-primary']); ?>
</form>
</div>
