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
            <?php echo $this->Html->link('Detail Information','/users/profile',
                                         ['class'=>'list-group-item list-group-item-action']) ?>
            <?php echo $this->Html->link('Detail Information','/advisors/profile',
                                         ['class'=>'list-group-item list-group-item-action active']) ?>
            <a href="#!" class="list-group-item list-group-item-action">Reset Password</a>
            </div>
        </div>
        <div class = "col-md-9">
            <div class = "card">    
            <?= $this->Form->create(($advisor),['class' => 'text-center border border-light p-5'])?>
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
                <div class = "md-form">    
                    <?= $this->Form->control(('room'),[
                        'class' => ['form-control']
                        ])?>
                </div>
                <div class = "md-form">    
                    <?= $this->Form->control(('address'),[
                        'class' => ['form-control'],
                        'value' => $address['address']
                        ])?>
                </div>
                <div class = "md-form">    
                    <?= $this->Form->control(('poscode'),[
                        'class' => ['form-control'],
                        'value' => $address['poscode']
                        ])?>
                </div>
                <div class = "md-form">    
                    <?= $this->Form->control(('state'),[
                        'class' => ['form-control'],
                        'value' => $address['state']
                        ])?>
                </div>
             <?= $this->Form->button(__('Update'),['class'=>'btn btn-success']) ?>
            <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
