<!-- File: src/Template/Users/login.ctp -->

<div class="users form">
<?= $this->Flash->render() ?>
<?= $this->Form->create(null,['class'=>'text-center border border-light p-5']) ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <div class = "md-form">
            <?= $this->Form->control('email',['class'=>'form-control mb-4','id' => 'email', 'label' => 'Email']) ?>
           
        </div>
        <div class = "md-form">
            <?= $this->Form->control('password',['class'=>'form-control mb-4','id' => 'password','label' => 'Password'])?>
        </div>
    </fieldset>
<?= $this->Form->button(__('Login'),['class' => 'btn btn-success']); ?>
<?= $this->Form->end() ?>
</div>