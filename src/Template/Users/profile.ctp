<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class = "container">
    <div class = "card">    
        <?= $this->Form->create(($user),['class' => 'text-center border border-light p-5'])?>
        <fieldset>
            <legend><?= __('Profile') ?></legend>
            <div class = "md-form">    
            <?= $this->Form->control(('email'),[
                'class' => ['form-control']
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
        <?= $this->Form->button(__('Update')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
