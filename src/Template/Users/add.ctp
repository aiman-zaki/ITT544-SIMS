<!-- src/Template/Users/add.ctp -->
<div class = "container">
<?= $this->Form->create(($user),['class' => 'text-center border border-light p-5'])?>

        <legend><?= __('Add User') ?></legend>
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
        <?= $this->Form->control('role_id', [
            'options' => [1 => 'Advisor', 2 => 'Intern', 3 => 'Company'],
            'class' => ['mdb-select md-form']
        ]) ?>
<?= $this->Form->button(__('Submit'),['class' => 'btn btn-primary']); ?>
<?= $this->Form->end() ?>
</div>
