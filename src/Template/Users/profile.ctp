<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class = "container">
    <div class = "row">
        <div class = "col-md-3">
        <div class="list-group">
            <div class="list-group-item list-group-item-action active">
                Details
            </div>
            <?php if($session_user['role'] == 'intern') {
                         echo $this->Html->link('Detail Information','/interns/profile',
                            ['class'=>'list-group-item list-group-item-action']);
             } else {
                echo $this->Html->link('Detail Information','/advisors/profile',
                ['class'=>'list-group-item list-group-item-action']);
                 
             }?>
            <a href="#!" class="list-group-item list-group-item-action">Reset Password</a>
            </div>
        </div>
        <div class = "col-md-9">
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
                    <?= $this->Form->control(('fname'),[
                        'class' => ['form-control']
                        ])?>
                </div>
                <div class = "md-form">    
                    <?= $this->Form->control(('lname'),[
                        'class' => ['form-control']
                        ])?>
                </div>
                <?= $this->Form->control('role', [
                    'options' => ['advisor' => 'Advisor', 'student' => 'Student'],
                    'class' => ['mdb-select md-form']
                ]) ?>
                </fieldset>
                <?= $this->Form->button(__('Update'),['class'=>'btn btn-success']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
