<div class = "container">
    <div class = "row">
        <div class = "col-md-3">
        <div class="list-group">
            <?php echo $this->Html->link('Detail','/users/profile',
                                         ['class'=>'list-group-item list-group-item-action']) ?>
            <?php echo $this->Html->link('Detail Information','/interns/profile',
                                         ['class'=>'list-group-item list-group-item-action active']) ?>
            <?php echo $this->Html->link('Achievements','/interns/profile_etc',
                                         ['class'=>'list-group-item list-group-item-action']) ?>
            <a href="#!" class="list-group-item list-group-item-action">Reset Password</a>
            </div>
        </div>
        <div class = "col-md-9">
            <div class = "card">
            <?= $this->Form->create(($intern),['class' => 'text-center border border-light p-5'])?>
            <h2><span class="badge badge-primary">Intern's Profiles</span></h2>
            <div class = "row" style="margin-top:20px">
                <div class = "col-md-6">
                    <div class = "md-form">    
                        <?= $this->Form->control(('fname'),[
                            'class' => ['form-control'],
                            'label' => 'First Name',
                            ])?>
                    </div>
                </div>
                <div class = "col-md-6">
                    <div class = "md-form">    
                        <?= $this->Form->control(('lname'),[
                            'class' => ['form-control'],
                            'label' => 'Last Name'
                            ])?>
                    </div>
                </div>
                <div class = "col-md-6">
                    <div class = "md-form">    
                        <?= $this->Form->control(('phone'),[
                            'class' => ['form-control'],
                            'label' => 'Phone'
                            ])?>
                    </div>
                </div>
            </div>
            <div class = "row">
                <div class = "col-md-6">
                    <div class = "md-form">
                    <?= $this->Form->textarea(('address'),[
                            'class' => ['md-textarea form-control'],
                            'value' => $address['address'],
                            'label' => 'Address',
                            'id' => 'form',
                            'row' => 2
                            ])?>
                            <label for="form">Address</label>
                        </div>
                    </div>
                </div>
                <div class  = "row">
                    <div class = "col-md-6">
                        <div class = "md-form">    
                            <?= $this->Form->control(('poscode'),[
                                'class' => ['form-control'],
                                'value' => $address['poscode'],
                               
                                ])?>
                        </div>
                    </div>
                    <div class = "col-md-6">
                        <div class = "md-form">    
                            <?= $this->Form->control(('state'),[
                                    'class' => ['form-control'],
                                    'value' => $address['state']
                                    ])?>
                        </div>
                    </div>
                    </div>
             <?= $this->Form->button(__('Update'),['class'=>'btn btn-success']) ?>
            <?= $this->Form->end() ?>  
        </div>
    </div>
    <div class = "row">
       
    </div>
</div>
