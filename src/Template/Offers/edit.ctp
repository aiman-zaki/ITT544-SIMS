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
        <div class = "row">
            <div class = "col-md-6">
                <div class="md-form">
                    <input placeholder="Selected date" type="text" id="date-picker-example" class="form-control datepicker" name="startdate" id="startdate">
                    <label for="date-picker-example">Start Date</label>
                </div>
            </div>
            <div class = "col-md-6">
                <div class="md-form">
                    <input placeholder="Selected date" type="text" id="date-picker-example" class="form-control datepicker" name="enddate" id="enddate">
                    <label for="date-picker-example">End Date</label>
                </div>
            </div>
        </div>
        <div class = "md-form">
            <?= $this->Form->control(('requirement'),[
                'class' => ['form-control']

            ]) ?>
        </div>
        <?php foreach($offer->requirements as $requirement){ ?>
        <div class = "md-form">
            <?= $this->Form->control(' ',[
                'class' => ['form-control'],
                'value' => $requirement->requirements,
                 'disabled' => true,
            ]) ?>
            </div>
        <?php } ?>
        <div class = "md-form">
            <?= $this->Form->textarea(('description'),[
                'class' => ['md-textarea form-control']
            ]) ?>
            <label for = "description">Description</label>
        </div>

<?= $this->Form->button(('Update'),['class' => 'btn btn-primary']); ?>
<?= $this->Form->end() ?>

<?= $this->Form->create(null,['action'=>'addReq','class' => 'text-center border border-light p-5']) ?>
<div class = "row">
                <div class = "col-md-9">
                    <div class = "md-form">
                        <?= $this->Form->hidden('offer_id',['value'=>$offer_id]); ?>
                        <?= $this->Form->control(('requirement'),[
                            'class' => ['form-control']
                        ]) ?>
                    </div>
                </div>
                <div class = "col-md-3">
                    <?= $this->Form->button('Add') ?>
                </div>
            </div>

<?= $this->Form->end() ?>
</div>


