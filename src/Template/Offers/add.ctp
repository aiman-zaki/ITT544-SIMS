<div class = "container">
<?= $this->Form->create(($offer),['class' => 'text-center border border-light p-5'])?>

        <legend><?= __('Add Offers') ?></legend>
        <div class = "md-form">    
            <?= $this->Form->control(('title'),[
                'class' => ['form-control']
                ])?>
        </div>
        
        <div class = "md-form">
            <?= $this->Form->date(('startdate'),[
                'class' => ['form-control']

            ]) ?>
        </div>
        <div class="md-form">
            <input placeholder="Selected date" type="text" id="date-picker-example" class="form-control datepicker" name="startdate" id="startdate">
            <label for="date-picker-example">Start Date</label>
        </div>
        <div class="md-form">
            <input placeholder="Selected date" type="text" id="date-picker-example" class="form-control datepicker" name="enddate" id="enddate">
            <label for="date-picker-example">End Date</label>
        </div>
        <div class = "md-form">
            <?= $this->Form->control(('requirement'),[
                'class' => ['form-control']

            ]) ?>
        </div>
        <div class = "md-form">
            <?= $this->Form->control(('description'),[
                'class' => ['form-control']

            ]) ?>
        </div>

<?= $this->Form->button(__('Submit'),['class' => 'btn btn-primary']); ?>
<?= $this->Form->end() ?>
</div>


