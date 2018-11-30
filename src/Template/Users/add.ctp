<!-- src/Template/Users/add.ctp -->
<style>
    .container{
        padding-left:140px;
    }

    @media only screen and (max-width:992px){
        .container{
            padding-left:0px;
        }
    }

</style>
<div class = "container">
<?= $this->Form->create(($user),['class' => 'text-center border border-light p-5'])?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <div class = "md-form">    
            <?= $this->Form->control(('email'),[
                'class' => ['form-control']
                ])?>
        </div>
        <div class = "md-form">
            <?= $this->Form->control(('fname'),[
                'class' => ['form-control']

            ]) ?>
        </div>
        <div class = "md-form">
            <?= $this->Form->control(('lname'),[
                'class' => ['form-control']

            ]) ?>
        </div>
        <div class = "md-form">
            <?= $this->Form->control(('password'),[
                'class' => ['form-control']

            ]) ?>
        </div>
        <?= $this->Form->control('role_id', [
            'options' => [1 => 'Advisor', 2 => 'Intern'],
            'class' => ['mdb-select md-form']
        ]) ?>
   </fieldset>
<?= $this->Form->button(__('Submit'),['class' => 'btn btn-primary']); ?>
<?= $this->Form->end() ?>
</div>
